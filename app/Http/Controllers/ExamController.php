<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
   
    public function index()
    {
        return response("SUCCESS", 200);
    }

 
    public function store(Request $request)
    {
      
    }

  
    public function show(Exam $exam)
    {

    }

  
    public function update(Request $request, Exam $exam)
    {
        //
    }

    
    public function destroy(Exam $exam)
    {
     
    }
}
