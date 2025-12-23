<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactStageHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Store a newly created contact via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getContacts(Request $request)
    {
        $perPage = $request->get('per_page', 100); // /v1/contacts?per_page=20

        $sortBy = $request->get('sort_by', 'created_at');
        $sortDir = $request->get('sort_dir', 'desc');

        $query = Contact::query();

        // ✅ Search by name
        if ($request->filled('stage')) {
            $stage = $request->stage;
            $query->where('stage', $stage);
        }
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        // Validate allowed sort fields (security)
        $allowedSorts = ['created_at', 'name', 'tel', 'email', 'source', 'address'];
        $sortDir = strtolower($sortDir) === 'asc' ? 'asc' : 'desc';

        if (! in_array($sortBy, $allowedSorts, true)) {
            $sortBy = 'created_at';
        }

        $query->orderBy($sortBy, $sortDir);

        $contacts = $query->paginate($perPage);
        // $contacts = Contact::orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'data' => $contacts->items(),
            'meta' => [
                'current_page' => $contacts->currentPage(),
                'last_page' => $contacts->lastPage(),
                'per_page' => $contacts->perPage(),
                'total' => $contacts->total(),
            ],
        ]);
    }

    /** Add a new contact. @return \Illuminate\Http\JsonResponse
     */
    public function addContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'stage_id' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $defaultStage = 1;
        $contact = Contact::create($data);

        // add history
        ContactStageHistory::create([
            'contact_id' => $contact->id,
            'contact_stage_id' => $defaultStage,
        ]);

        return response()->json([
            'success' => true,
            'data' => $contact,
            'message' => 'Contact created successfully.',
        ], 201);
    }

    /**
     * Update an existing contact.
     *
     * @param  int|string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateContact(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'stage_id' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // Find contact or fail with 404
        $contact = Contact::findOrFail($id);

        // Update only the validated fields
        $contact->update($data);

        return response()->json([
            'success' => true,
            'data' => $contact->fresh(),
            'message' => 'Contact updated successfully.',
        ], 200);
    }

    /**
     * Update an existing contact.
     *
     * @param  int|string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteContact(string $id)
    {
        $contact = Contact::findOrFail($id);   // or route model binding: public function destroy(contact $contact)
        $contact->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Get toal leads per day (contacts with stage = 'contact')
     *
     * Optional query params:
     *  - from: YYYY-MM-DD
     *  - to: YYYY-MM-DD
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDailyLeads(Request $request)
    {
        // TODO: allow custom id of lead (not fix)

        $query = ContactStageHistory::query()
            ->selectRaw('DATE(created_at) as date, COUNT(DISTINCT contact_id) as total')
            ->where('contact_stage_id', '2')
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('date', 'desc');
        // Optional: filter date range
        if ($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->get('from'));
        }
        if ($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->get('to'));
        }

        $date = $query->get();

        return response()->json([
            'success' => true,
            'data' => $date,
        ]);
    }
}
