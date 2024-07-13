<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchDuration;
use App\Models\Mentor;
use App\Models\Classes;

class WatchDurationController extends Controller
{

    public function calculateNetProfit($totalIncome, $expenses)
    {
        $netProfit = $totalIncome - $expenses;

        return $netProfit;
    }

    public function calculateRevenueDistribution($classId)
    {
        $watchDurations = WatchDuration::where('class_id', $classId)->get();
        $totalWatchDuration = $watchDurations->sum('duration_minutes');
        $class = Classes::findOrFail($classId);
        $mentorId = $class->mentor_id;
        $mentor = Mentor::findOrFail($mentorId);
        $percentageToMentor = 0.8;
        $revenueToMentor = $totalWatchDuration * $percentageToMentor;
        return $revenueToMentor;
    }
}
