<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class EqoluentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(3);
        
        return view('eqoluent.index' ,compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eqoluent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->studentname,
            'age' => $request->studentage,
            'city' => $request->studentcity
            ]);
            return redirect()->route('eqoluent.index')->with('status','Data Inserted Sucessfully');
            return $request;
            }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('eqoluent.view',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('eqoluent.update',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where('id',$id)
        ->update([
             'name' => $request->studentname,
            'age' => $request->studentage,
            'city' => $request->studentcity
        ]);
        return redirect()->route('eqoluent.index')->with('status','Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect()->route('eqoluent.index')->with('status','Data Deleted');
    }
}
