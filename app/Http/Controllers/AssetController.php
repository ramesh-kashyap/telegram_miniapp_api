<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    public function balance()
    {
        $user = Auth::user();

        return response()->json([
            'usdt' => (float) $user->usdt_balance,
            'oft'  => (float) $user->oft_balance,
        ]);
    }

       public function index(Request $request)
    {
        $userId = $request->user()->id;
        /* ---------------- BALANCES ---------------- */

        $usdtBalance = 500;

        $oftBalance = 600;

        /* ---------------- INCOME CARDS ---------------- */

        $dailyRoi = DB::table('incomes')
            ->where('user_id', $userId)
            ->where('remarks', 'Daily ROI')
            ->sum('amount');

        $referralIncome = DB::table('incomes')
            ->where('user_id', $userId)
            ->where('remarks', 'Referral Income')
            ->sum('amount');

        $levelIncome = DB::table('incomes')
            ->where('user_id', $userId)
            ->where('remarks', 'Level Income')
            ->sum('amount');

        $salaryIncome = DB::table('incomes')
            ->where('user_id', $userId)
            ->where('remarks', 'Salary Income')
            ->sum('amount');

        $rewardIncome = DB::table('incomes')
            ->where('user_id', $userId)
            ->where('remarks', 'Reward Income')
            ->sum('amount');

        $totalEarned = $dailyRoi + $referralIncome + $levelIncome + $salaryIncome + $rewardIncome;

        /* ---------------- RECENT HISTORY (LIMIT 6) ---------------- */

    
        return response()->json([
            'balances' => [
                'USDT' => (float) $usdtBalance,
                'OFT'  => (float) $oftBalance,
            ],
            'income_cards' => [
                'daily_roi' => $dailyRoi,
                'referral_income' => $referralIncome,
                'level_income' => $levelIncome,
                'salary_income' => $salaryIncome,
                'reward_income' => $rewardIncome,
                'total_earned' => $totalEarned,
            ],
        ]);
    }


}