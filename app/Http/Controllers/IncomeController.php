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




 public function pendingDeposit()
    {
        return view('pending_deposite'); 
        // resources/views/pending_deposite.blade.php
    }


 public function rejectDeposit()
    {
        return view('reject_deposite'); 
        // resources/views/reject_deposite.blade.php
    }




 public function approveDeposit()
    {
        return view('approval_deposite'); 
        // resources/views/approval_deposite.blade.php
    }



    

    public function pendingWithdrawal()
        {
            return view('pending_withdrawal'); 
            // resources/views/pending_withdrawal.blade.php
        }


     public function rejectWithdrawal()
        {
            return view('reject_withdrawal'); 
            // resources/views/reject_withdrawal.blade.php
        } 

     public function approvalWithdrawal()
          {
                return view('approval_withdrawal'); 
                // resources/views/approval_withdrawal.blade.php
          }












}
