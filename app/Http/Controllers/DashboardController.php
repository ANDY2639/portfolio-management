<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard.index', [
            'AmountTotal' => Loan::sum('amount'),
            'TotalCustomer' => Customer::count(),
            'TotalLoans' => Loan::count(),
        ]);
    }


}
