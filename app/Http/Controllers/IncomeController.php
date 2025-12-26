<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TelegramUser;
use App\Models\Investment;
use App\Models\Income;
use App\Models\Withdraw;
use App\Models\Buyfund;

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
    public function depositReport(){
         $depositReport = Investment::with('user')->paginate(20);
        return view('deposit-report', compact('depositReport'));
    }
    public function addfundreport(){
     
        $fundReport = Buyfund::paginate(20);
        return view('fund-report', compact('fundReport'));
    }

     public function pendingWithdraw(){     
        $withdrawReport = Withdraw::where('status','Pending')->paginate(10);
        return view('wallet.pending-withdraw', compact('withdrawReport'));
    }
    public function ApprovedWithdraw(){     
        $ApprovedReport = Withdraw::where('status','Approved')->paginate(10);
        return view('wallet.approved-withdraw', compact('ApprovedReport'));
    }
    public function FailedWithdraw(){
     
        $FailedReport = Withdraw::where('status','Failed')->paginate(10);
        return view('wallet.failed-withdraw', compact('FailedReport'));
    }

     public function updateStatus(Request $request)
            {
                $report = Investment::findOrFail($request->id);

                $report->status = $request->status;   // Active / Pending
                $report->save();

                return response()->json(['success' => true]);
            }
     public function fundStatus(Request $request)
            {
                $report = Buyfund::findOrFail($request->id);

                $report->status = $request->status;   // Active / Pending
                $report->save();

                return response()->json(['success' => true]);
            }       


   public function levelIncome()
    {
        $levelIncomes = Income::where('remarks', 'Level Income')
            ->orderByDesc('id')
            ->get();

        return view('income.level-income', compact('levelIncomes'));
    }
     
     public function fundreport()
    {
        $levelIncomes = Income::where('remarks', 'Level Income')->orderByDesc('id')
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
