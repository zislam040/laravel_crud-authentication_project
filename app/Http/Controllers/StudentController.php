<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index(){
       //collect data from student table.....
        $studens= Student::all();
        return view('index')->with('students',$studens);
    }


    public function create(){
        return view('create');
    }


    public function edit($id){
        $student=Student::find($id); 
        //Laravel eloquent query "find"......

        return view('edit')->with('student',$student);
    } 





    public function store(Request $request){

       //check the validation from each an individual element

       $this->validate($request,[
           'name'            => 'required|string|max:10',
           'registration_id' => 'required|integer',
           'department_name' => 'required|string',
           'info'            => 'nullable'
       ]);
 

        //Insert data into student table

        $student= new Student;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();

        return redirect()-> route('index');
    }



        public function update(Request $request,$id){
          //Update data into student table

            $student=Student::find($id);
            $student->name = $request->name;
            $student->registration_id = $request->registration_id;
            $student->department_name = $request->department_name;
            $student->info = $request->info;
            $student->save();

            return redirect()-> route('index');
        
                
    }


    public function delete($id){
          //delete data into student table

            $student=Student::find($id);
            $student->delete();

            return redirect()-> route('index');
        
                
    }




}

