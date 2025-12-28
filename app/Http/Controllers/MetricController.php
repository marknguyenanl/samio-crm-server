<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
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

    /**
     * Get the conversion rate for the current month.
     *
     * @return array<string,mixed>
     */
    public function getConversionRateThisMonth(): array
    {
        $thisMonth = Carbon::now()->month();
        // find total leads in period
        $subA = DB::table('contact_stage_histories')
            ->select(
                'contact_id',
                DB::raw('DATE(MIN(created_at)) as adate')
            )
            ->where('contact_stage_id', 2)
            ->whereMonth('created_at', $thisMonth)
            ->groupBy('contact_id');

        $subB = DB::table('contact_stage_histories')
            ->select(
                'contact_id',
                DB::raw('DATE(MIN(created_at)) as bdate')
            )
            ->where('contact_stage_id', 4)
            ->whereMonth('created_at', $thisMonth)
            ->groupBy('contact_id');

        $total_customers_this_month = DB::query()
            ->fromSub($subA, 'a')
            ->joinSub($subB, 'b', function ($join) {
                $join->on('a.contact_id', '=', 'b.contact_id');
            })
            ->selectRaw('COUNT(*) as total_customers')
            ->value('total_customers'); // returns integer
        // get contact_id
        // find corresponding contact_id customers stage
        $total_leads_this_month = DB::query()
            ->fromSub($subA, 'a')
            ->selectRaw('COUNT(*) as total_leads')
            ->value('total_leads'); // returns integer

        // divide
        $conversion_rate_this_month = $total_leads_this_month > 0
            ? $total_customers_this_month / $total_leads_this_month
            : 0;

        return [
            'conversion_rate' => $conversion_rate_this_month,
            'total_leads' => $total_leads_this_month,
            'total_customers' => $total_customers_this_month,
        ];
    }

    /**
     * @return \Illuminate\Http\JsonResponse JSON response containing the token payload.
     */
    public function getConversionRate()
    {
        $type = 'this-month';
        switch ($type) {
            case 'this-month':
            default:
                $data = $this->getConversionRateThisMonth();
                break;
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }
}
