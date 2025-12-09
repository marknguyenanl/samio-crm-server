<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Store a newly created lead via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLeads(Request $request)
    {
        $perPage = $request->get('per_page', 100); // /v1/leads?per_page=20

        $sortBy = $request->get('sort_by', 'created_at');
        $sortDir = $request->get('sort_dir', 'desc');

        $query = Lead::query();

        // ✅ Search by name
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        // Validate allowed sort fields (security)
        $allowedSorts = ['created_at', 'name', 'tel', 'email', 'source', 'address'];
        if (in_array($sortBy, $allowedSorts) && in_array($sortDir, ['asc', 'desc'])) {
            $query->orderBy($sortBy, $sortDir);
        }

        $leads = $query->paginate($perPage);
        // $leads = Lead::orderBy('created_at', 'desc')->get();

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
    public function addLead(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $lead = Lead::create($data);

        return response()->json([
            'success' => true,
            'data' => $lead,
            'message' => 'Lead created successfully.',
        ], 201);
    }

    /**
     * Update an existing lead.
     *
     * @param  int|string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateLead(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // Find lead or fail with 404
        $lead = Lead::findOrFail($id);

        // Update only the validated fields
        $lead->update($data);

        return response()->json([
            'success' => true,
            'data' => $lead->fresh(),
            'message' => 'Lead updated successfully.',
        ], 200);
    }

    public function deleteLead(string $id)
    {
        $lead = Lead::findOrFail($id);   // or route model binding: public function destroy(Lead $lead)
        $lead->delete();

        return response()->json(null, 204);
    }
}
