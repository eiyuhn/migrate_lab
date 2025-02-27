<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
   
    public function index()
    {
        return response("SUCCESS", 200);
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show(Attendance $attendance)
    {
        
    }

    
    public function update(Request $request, Attendance $attendance)
    {
        
    }

    
    public function destroy(Attendance $attendance)
    {
        
    }
}
