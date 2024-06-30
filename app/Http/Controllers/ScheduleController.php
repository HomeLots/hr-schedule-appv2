<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Employee;
use App\Models\Course;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with(['employee', 'course'])->get();
        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        $employees = Employee::all();
        $courses = Course::all();
        return view('schedules.create', compact('employees', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'course_id' => 'required|exists:courses,id',
            'scheduled_date' => 'required|date'
        ]);

        Schedule::create($request->all());
        return redirect()->route('schedules.index');
    }

    public function show(Schedule $schedule)
    {
        return view('schedules.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        $employees = Employee::all();
        $courses = Course::all();
        return view('schedules.edit', compact('schedule', 'employees', 'courses'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'course_id' => 'required|exists:courses,id',
            'scheduled_date' => 'required|date'
        ]);

        $schedule->update($request->all());
        return redirect()->route('schedules.index');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index');
    }
}
