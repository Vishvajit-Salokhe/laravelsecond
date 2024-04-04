<?php

namespace App\Http\Controllers\Employee;
use Yajra\DataTables\Facades\DataTables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetailsModel;
use App\Models\User;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class EmployeeController extends Controller
{
    public function view(Request $request){
        if($request->ajax()){
        $data = User::join('user_details','users.id','=','user_details.eid')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="/edit/'.$row->eid.'" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a> <a href="delete/'.$row->eid.'" id="servideletebtn" class="delete btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}


public function delete(Request $id){
    $result =User::where('id', $id->id)->delete();
    $result2 =UserDetailsModel::where('eid', $id->id)->delete();

    return redirect()->back();

}


public function store(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'role'=>'required',
        'address'=>'required',
        'phone_number' => 'required',
        'gender'=>'required',
        'dob'=>'required'
    ]);



    $emp = new User;
    $emp->name =$request['name'];
    $emp->email =$request['email'];
    $emp->password =Hash::make($request['password']);
    $emp->role =$request['role'];
    $emp->save();

    
    $empd = new UserDetailsModel;
    $empd->address =$request['address'];
    $empd->phone_number =$request['phone_number'];
    $empd->gender =$request['gender'];
    $empd->dob =$request['dob'];

    $empd->eid = $emp->id;
    $empd->save();

    return redirect()->back();
}

    public function edit($id){
        $data =[
            'user' => User::findOrFail($id),
            'userdet' => UserDetailsModel::findOrFail($id)
        ];
        return view('admin.edit',compact('data'));
    }


    public function update(Request $request, $id) {
   
        $emp = User::find($id);

        $emp->name = $request['name'];
        $emp->email = $request['email'];
        $emp->password =$request['password'];
        $emp->role =$request['role'];
        $emp->save();
    
    
        $empd = UserDetailsModel::find($id);
        $empd->gender =$request['gender'];
        $empd->address =$request['address'];
        $empd->phone_number =$request['phone_number'];
        
        $empd->dob =$request['dob'];
    
        $empd->eid = $emp->id;
        $empd->save();


        if(Auth::user()->role == 'admin'){
        return redirect('empdata');
    }else{
        return redirect()->back();
    }
  
    }


}

