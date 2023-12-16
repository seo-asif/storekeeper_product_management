<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function showHome()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $currentMonth = Carbon::now()->month;
    
        $todaySales = DB::table('sales')->whereDate('created_at', $today)->sum('subtotal');
        $yesterdaySales = DB::table('sales')->whereDate('created_at', $yesterday)->sum('subtotal');
        $lastMonthSales = DB::table('sales')
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->sum('subtotal');
        $thisMonthSales = DB::table('sales')->whereMonth('created_at', $currentMonth)->sum('subtotal');
    
        return view('pages.dashboard', compact('todaySales', 'yesterdaySales', 'lastMonthSales', 'thisMonthSales'));
    }
    

    public function today()
    {
        $today = Carbon::today();
        $todaySales = DB::tabel('sales')->whereDate('created_at', $today)->sum('subtotal');

        return $todaySales;
        return view('pages.dashboard', compact('todaySales'));
    }

}
