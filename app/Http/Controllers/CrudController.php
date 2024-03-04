<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\ExamTable;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form_view(){
        return view('crud.insert_form');
    }

    public function insert(Request $request){
        $request->validate([
            'employee_id'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'salary'=>'required',
        ]);

        $data_insert = new Employee();
        $data_insert->employee_id=$request->employee_id;
        $data_insert->name=$request->name;
        $data_insert->phone=$request->phone;
        $data_insert->email=$request->email;
        $data_insert->address=$request->address;
        $data_insert->salary=$request->salary;
        $data_insert->save();

        return redirect()->route('display');
    }

    public function display(){
        $data = Employee::all();
        return view('crud.display', compact('data'));
    }

    public function edit($id){
        $data = Employee::find($id);
        return view('crud.edit_form', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'employee_id'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'salary'=>'required',
        ]);

        $data_update=Employee::find($id);
        $data_update->employee_id=$request->employee_id;
        $data_update->name=$request->name;
        $data_update->phone=$request->phone;
        $data_update->email=$request->email;
        $data_update->address=$request->address;
        $data_update->salary=$request->salary;
        $data_update->save();
        return redirect()->route('display');
    }

    public function delete($id){
        $data = Employee::find($id)->delete();
        return redirect()->route('display');
    }
}
