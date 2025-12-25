<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetricController extends Controller
{
    /**
     * Get toal leads per day (contacts with stage = 'contact')
     *
     * Optional query params:
     *  - from: YYYY-MM-DD
     *  - to: YYYY-MM-DD
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTotalLeadsPerDay(Request $request)
    {
        // TODO: allow custom id of lead (not fix)
        $sub = DB::table('contact_stage_histories')   // change to your real table name
            ->select(
                'contact_id',
                DB::raw('DATE(MIN(created_at)) as first_lead_date')
            )
            ->where('contact_stage_id', 2)
            ->groupBy('contact_id');

        $query = DB::query()
            ->fromSub($sub, 'first_leads')
            ->select(
                'first_leads.first_lead_date as date',
                DB::raw('COUNT(*) as total_leads')
            )
            ->groupBy('date')
            ->orderBy('date');

        // Optional: filter date range
        if ($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->get('from'));
        }
        if ($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->get('to'));
        }

        $data = $query->get();

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }
}
