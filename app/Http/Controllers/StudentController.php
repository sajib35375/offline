<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = Student::all();
        return view('student.index',[
            'all_data' => $data
        ]);
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
//        return $request->all();
        $this->validate($request,[
           'name' => 'required',
           'email' => 'required',
           'cell' => 'required',
           'username' => 'required',
           'age' => 'required'
        ]);
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $unique_name = md5(time().rand()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/img'),$unique_name);
        }



        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell' => $request->cell,
            'username' => $request->username,
            'age' => $request->age,
            'photo' => $unique_name,
        ]);
        return redirect()->back()->with('success','data insert successfully');
    }
    public function show($id){
        $single_data = Student::find($id);
        return view('student.show',[
            'data' => $single_data
        ]);
    }
    public function delete($id){
        $delete_data = Student::find($id);
        $delete_data ->delete();
        return redirect()->back()->with('success','data delete successfully');
    }
    public function edit($id){
        $edit_data = Student::find($id);
        return view('student.edit',[
            'edit_data' => $edit_data
        ]);
    }
    public function update(Request $request, $id){

        if ($request->hasFile('new_photo')){
            $file = $request->file('new_photo');
            $unique_name = md5(time().rand()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/img'),$unique_name);
            if (file_exists('media/img/'.$request->old_photo)){
                unlink('media/img/'.$request->old_photo);
            }
        }else{
            $unique_name = $request->old_photo;
        }



        $update_data = Student::find($id);
        $update_data->name = $request->name;
        $update_data->email = $request->email;
        $update_data->cell = $request->cell;
        $update_data->username = $request->username;
        $update_data->age = $request->age;
        $update_data->photo = $unique_name;
        $update_data->update();

        return redirect()->back()->with('success','data update successfully');

    }
}
