<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a newly created contact via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getContacts(Request $request)
    {
        $perPage = $request->get('per_page', 100); // /v1/leads?per_page=20

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

        $leads = $query->paginate($perPage);
        // $leads = Contact::orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'data' => $leads->items(),
            'meta' => [
                'current_page' => $leads->currentPage(),
                'last_page' => $leads->lastPage(),
                'per_page' => $leads->perPage(),
                'total' => $leads->total(),
            ],
        ]);
    }

    /** Add a new lead. @return \Illuminate\Http\JsonResponse
     */
    public function addContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $lead = Contact::create($data);

        return response()->json([
            'success' => true,
            'data' => $lead,
            'message' => 'Contact created successfully.',
        ], 201);
    }

    /**
     * Update an existing lead.
     *
     * @param  int|string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateContact(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'stage' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // Find lead or fail with 404
        $lead = Contact::findOrFail($id);

        // Update only the validated fields
        $lead->update($data);

        return response()->json([
            'success' => true,
            'data' => $lead->fresh(),
            'message' => 'Contact updated successfully.',
        ], 200);
    }

    /**
     * Update an existing lead.
     *
     * @param  int|string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteContact(string $id)
    {
        $lead = Contact::findOrFail($id);   // or route model binding: public function destroy(Lead $lead)
        $lead->delete();

        return response()->json(null, 204);
    }
}
