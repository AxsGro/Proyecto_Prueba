<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$student = DB::table('students')->get();
         return $student;*/
         $student = Student::find(1);
         return $student->program;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->nombre,
            'last_name' => $request->app,
            'control' => $request->num,
            'email' => $request->correo,
            'semester' => $request->sem,
            'program_id' => $request->programId,
        ]);
        $student->save();

        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
      $student = Student::where('name', $request->name)
                                ->where('last_name', $request->last_name)->get();
       //$student = Student::find($request->id);
       return $student;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Student $student)
    {
        $student = Student::where('id', $request->id)->get();
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        /*
        $student = Student::find($request->id);

        $student-> name = $request

        */
        $student = Student::where('id', $request->id)->first();

        $student ->update([
            'name' => $request->nombre,
            'last_name' => $request->app,
            'control' => $request->num,
            'email' => $request->correo,
            'semester' => $request->sem,
        ]);
        $student->save();
        return $student;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $student = Student::where('control', $request->control)->delete();
        return $student;

    }

    public function token(){
        return csrf_token();
    }
}
