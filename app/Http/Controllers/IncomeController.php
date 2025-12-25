<?php

namespace App\Http\Controllers;

use App\Models\Income;

class IncomeController extends Controller
{
    public function roiIncome()
    {
        // Fetch only ROI Income rows
        $roiIncomes = Income::where('remarks','ROI Income')
            ->orderByDesc('id')
            ->get();
        // Pass the data to the Blade view
        return view('income.roi-income', compact('roiIncomes'));
    }


   public function levelIncome()
    {
        $levelIncomes = Income::where('remarks', 'Level Income')
            ->orderByDesc('id')
            ->get();

        return view('income.level-income', compact('levelIncomes'));
    }


       public function dailyReferralIncome()
    {
        // Fetch only Direct Referral Income rows
        $referralIncomes = Income::where('remarks', 'Direct Referral Income')
            ->orderByDesc('id')
            ->get();

        return view('income.daily-referral-income', compact('referralIncomes'));
    }


}
