<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactStage;
use App\Models\ContactStageHistory;
use Illuminate\Http\Request;

class ContactStageController extends Controller
{
    /**
     * Store a newly created contact stage via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $query = ContactStage::query();

        $query->orderBy('order', 'asc');

        return response()->json([
            'success' => true,
            'data' => $query->get(),
        ]);
    }

    /** Add a new contact stage. @return \Illuminate\Http\JsonResponse
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|max:255',
            'label' => 'string|max:255',
            'order' => 'integer',
        ]);

        $contactStage = ContactStage::create($data);

        return response()->json([
            'success' => true,
            'data' => $contactStage,
        ]);
    }

    /**
     * Update an existing contactStage.
     *
     * @param  int|string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'key' => 'required|string|max:255',
            'label' => 'string|max:255',
            'order' => 'integer',
        ]);

        $contactStage = ContactStage::findOrFail($id);
        $contactStage->update($data);

        return response()->json([
            'success' => true,
            'data' => $contactStage,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id)
    {
        $contactStage = ContactStage::findOrFail($id);
        $contactStage->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contact stage deleted successfully.',
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id)
    {
        return response()->json([
            'success' => true,
            'data' => ContactStage::findOrFail($id),
        ]);
    }

    /**
     * @param  string|int  $id
     * @param  string|int  $currentStage
     * @return \Illuminate\Http\JsonResponse
     */
    public function nextStage(Request $request)
    {
        $request->validate([
            'contact_id' => 'required|integer|exists:contacts,id',
            'current_stage_id' => 'required|integer|exists:contact_stages,id',
        ]);

        $id = $request->input('contact_id');
        $currentStageId = $request->input('current_stage_id');
        $currentStageData = ContactStage::find($currentStageId);
        $nextStageData = ContactStage::where('order', '>', $currentStageData->order)->firstOrFail();

        if (! $nextStageData) {
            return response()->json([
                'success' => false,
                'message' => 'You have already been at last stage of pipeline',
            ], 404);
        }
        $contact = Contact::findOrFail($id);
        $contact->update(['stage_id' => $nextStageData->id]);

        // create contact stage history when new contact (prospect) added
        ContactStageHistory::create([
            'contact_id' => $contact->id,
            'contact_stage_id' => $nextStageData->id,
        ]);

        return response()->json([
            'success' => true,
            'data' => $nextStageData,
        ]);
    }
}
