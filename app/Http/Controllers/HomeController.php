<?php

namespace App\Http\Controllers;

use App\User;
use App\Charts\AgeChart;
use App\Charts\EngagementChart;
use App\Charts\ExpenseChart;
use App\Charts\GenderChart;
use App\Charts\MonthlyProductChart;
use App\Charts\MonthlyStoreChart;
use App\Charts\MonthlyUsersChart;
use App\Charts\TransactionChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(GenderChart $chartStore, AgeChart $chartProduct, EngagementChart $chartEngagement, ExpenseChart $chartExpense, TransactionChart $chartTransaction)
    {
        $chartTransaction = $chartTransaction->build();
        $chartExpense = $chartExpense->build();
        $chartArea = $chartEngagement->build();
        $chartDonut = $chartStore->build();
        $chartBar = $chartProduct->build();
        return view('cms.home', compact('chartDonut', 'chartBar', 'chartArea', 'chartExpense', 'chartTransaction'));
    }
}
