<?php

namespace App\Http\Controllers;

use App\Models\ClassroomStudent;
use Illuminate\Http\Request;

class ClassroomStudentController extends Controller
{
   
    public function index()
    {
        return response("SUCCESS", 200);
    }

   
    public function store(Request $request)
    {

    }

  
    public function show(ClassroomStudent $classroomStudent)
    {
       
    }

  
    public function update(Request $request, ClassroomStudent $classroomStudent)
    {
      
    }

  
    public function destroy(ClassroomStudent $classroomStudent)
    {
        
    }
}
