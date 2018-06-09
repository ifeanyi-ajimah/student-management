<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MyClass;

class CourseController extends Controller
{
    public function __construct(){
    	$this ->middleware('authen'); //change middleware to web when you make the middleware
    }

    public function getManageCourse()
    {
        $group =Group::orderBy('group_id','ASC')->get();
        $batch =Batch::orderBy('batch_id', 'ASC')->get();
        $shift =Shift::orderBy('shift_id', 'ASC')->get();
        $time =Time::orderBy('time_id', 'ASC')->get();
        $level = Level::orderBy('level_id', 'ASC')->get();
    	$program = Program::all();
    	$academic = Academic::orderBy('academic_id', 'ASC')->get();
    	return view('courses.manageCourses', compact('program','academic','level','time', 'shift','batch','group'));
    }

//========================================

public function showClassInformation()
{
    $classes = MyClass::join('academics', 'academics.academic_id', '=', 'myclasses.academic_id')
                      ->join('programs', 'programs.program_id', '=', 'myclasses.program_id')
                      ->join('levels', 'levels.level_id', '=','myclasses.level_id')
                      ->join('shifts', 'shifts.shift_id', '=', 'myclasses.shift_id')
                      ->join('times', 'times.time_id', '=', 'myclasses.time_id')
                      ->join('batches', 'batches.batch_id', '=', 'myclasses.batch_id')
                      ->join('groups', 'groups.group_id', '=', 'myclasses.group_id')
                      ->orderBy('programs.program','ASC')->get();
                     return view('classes.classInfo', compact('classes'));
}



public function deleteClass($id)
{
  MyClass::find($myclass_id)->delete();
  return back();
}
















    public function postInsertAcademic(Request $request)
    {
    	if($request->ajax())
    	{
    		return response(Academic::create($request->all()));
    	}
    }
    public function postInsertProgram(Request $request)
    {
    	if($request->ajax())
    	{
    		return response(Program::create($request->all()));
    	}

    }
}
