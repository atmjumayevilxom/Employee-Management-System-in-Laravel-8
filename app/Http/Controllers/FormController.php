<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class FormController extends Controller
{
    // view form
    public function index()
    {
        return view('form.form');
    }

    // view record
    public function viewRecord()
    {
        $data = DB::table('staff')->get();
        return view('view_record.viewrecord',compact('data'));
    }

    // view detail
    public function viewDetail($id)
    {
        $data = DB::table('staff')->where('id',$id)->get();
        return view('view_record.viewdetail',compact('data'));

    }

    // view update
    public function viewUpdate(Request $request)
    {
        try{
            $id           = $request->id;
            $rec_id       = $request->rec_id;
            $fullName     = $request->fullName;
            $sex          = $request->sex;
            $emailAddress = $request->emailAddress;
            $phone_number = $request->phone_number;
            $position     = $request->position;
            $department   = $request->department;
            $salary       = $request->salary;

            $update = [

                'id'            => $id,
                'rec_id'        => $rec_id,
                'full_name'     => $fullName,
                'sex'           => $sex,
                'email_address' => $emailAddress,
                'phone_number'  => $phone_number,
                'position'      => $position,
                'department'    => $department,
                'salary'        => $salary,
            ];
            Staff::where('id',$request->id)->update($update);
            Toastr::success('Data updated successfully :)','Success');
            return redirect()->route('form/view/detail');
        }catch(\Exception $e){

            Toastr::error('Data updated fail :)','Error');
            return redirect()->route('form/view/detail');
        }
    }

    // save 
    public function saveRecord(Request $request)
    {
        $request->validate([
            'fullName'     => 'required|string|max:255',
            'sex'          => 'required',
            'emailAddress' => 'required|string|email|max:255',
            'phone_number' => 'required|numeric|min:9',
            'position'     => 'required|string|max:255',
            'department'   => 'required|string|max:255',
            'salary'       => 'required|string|max:255',
        ]);
        try{
            $fullName     = $request->fullName;
            $sex          = $request->sex;
            $emailAddress = $request->emailAddress;
            $phone_number = $request->phone_number;
            $position     = $request->position;
            $department   = $request->department;
            $salary       = $request->salary;

            $Staff = new Staff();
            $Staff->full_name     = $fullName;
            $Staff->sex           = $sex;
            $Staff->email_address = $emailAddress;
            $Staff->phone_number  = $phone_number;
            $Staff->position      = $position;
            $Staff->department    = $department;
            $Staff->salary        = $salary;
            $Staff->save();

            Toastr::success('Data added successfully :)','Success');
            return redirect()->back();

        }catch(\Exception $e){

            Toastr::error('Data added fail :)','Error');
            return redirect()->back();
        }
    }

    // view delete
    public function viewDelete($id)
    {
        $delete = Staff::find($id);
        $delete->delete();
        Toastr::success('Data deleted successfully :)','Success');
        return redirect()->route('form/view/detail');
    }
}
