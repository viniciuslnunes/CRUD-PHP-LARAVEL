<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    protected $avarageIncome;

    public function __construct()
    {
        $this->avarageIncome = Client::avg('renda');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientsReport = [
            'today' =>  $this->getTodayClients(),
            'week' =>  $this->getCurrentWeekClients(),
            'month' =>  $this->getCurrentMonthClients(),
        ];

        return view('site.reports.index', compact('clientsReport'));
    }

    private function getTodayClients(): object
    {
        return Client::where('data_cadastro', date('Y-m-d'))
            ->whereDate('data_nasc', '<', date('Y-m-d', strtotime('-18 years')))
            ->where('renda', '>', $this->avarageIncome)
            ->get();
    }

    private function getCurrentWeekClients(): object
    {
        return Client::where('data_cadastro', '>', Carbon::now()->startOfWeek())
            ->where('data_cadastro', '<', Carbon::now()->endOfWeek())
            ->whereDate('data_nasc', '<=', date('Y-m-d', strtotime('-18 years')))
            ->where('renda', '>', $this->avarageIncome)
            ->get();
    }

    private function getCurrentMonthClients(): object
    {
        return Client::whereYear('data_cadastro', date('Y'))
            ->whereMonth('data_cadastro', date('m'))
            ->whereDate('data_nasc', '<=', date('Y-m-d', strtotime('-18 years')))
            ->where('renda', '>', $this->avarageIncome)
            ->get();
    }
}
