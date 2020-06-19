<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    function index(){
        $students=Student::all(); 
        return view("student.index",["students"=>$students]);
    }
    function create(){
        return view("student.create");
    }
    function store(Request $request){
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $phone=$request->phone;
        $address=$request->address;

        $student= new Student();

        $student->firstname=$firstname;
        $student->lastname = $lastname;
        $student->phone_number=$phone;
        $student->address =$address;

        $student->save();
        return redirect ("/students");
    }

    function edit($id){
        $student=Student::find($id);
        return view("student.edit",["student"=>$student]);
    }
    function update($id,Request $request){
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $phone=$request->phone;
        $address=$request->address;

        $student= Student::find($id);

        $student->firstname=$firstname;
        $student->lastname = $lastname;
        $student->phone_number=$phone;
        $student->address =$address;
        $student->save();

        return redirect ("/students");
    }
    function destroy($id){
        Student::find($id)->delete();
        return redirect ("/students");
    }
}
