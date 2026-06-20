<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    // public function index(Request $request)
    // {
    //     $tasks = Task::with(['category', 'priority'])
    //         ->where('user_id', auth()->id())
    //         ->get();
    //     $tasksByDate = $tasks->groupBy(function ($task) {
    //         return \Carbon\Carbon::parse($task->due_date)->format('Y-m-d');
    //     });
    //     return view('calender.index', compact('tasksByDate'));
    // }

    public function index(Request $request)
    {
        $month = $request->get('month', now()->month);
        $year  = $request->get('year', now()->year);

        $date = \Carbon\Carbon::create($year, $month, 1);

        $startDay = $date->dayOfWeek; // أول يوم بالشهر
        $daysInMonth = $date->daysInMonth;

        $tasks = Task::query()
            ->where('user_id', auth()->id())->get();

        $tasksByDate = $tasks->groupBy(function ($task) {
            return \Carbon\Carbon::parse($task->due_date)->format('Y-m-d');
        });

        return view('calendar.index', compact(
            'month',
            'year',
            'startDay',
            'daysInMonth',
            'tasksByDate'
        ));
    }
}
