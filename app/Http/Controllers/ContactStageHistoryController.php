<?php

namespace App\Http\Controllers;

use App\Models\ContactStageHistory;
use Illuminate\Http\Request;

class ContactStageHistoryController extends Controller
{
    public function index(Request $request)
    {
        return ContactStageHistory::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'contact_id' => 'required|string|max:255',
            'contact_stage_id' => 'string|max:255',
        ]);

        $contactStage = ContactStageHistory::create($data);

        return response()->json([
            'success' => true,
            'data' => $contactStage,
        ]);
    }
}
