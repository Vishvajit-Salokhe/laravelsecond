<?php

namespace App\Http\Controllers\Laeve;

use App\Http\Controllers\Controller;
use App\Models\LeaveModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    // public function leave(){


    //     $users = User::where('role', 'user')->where('status', 'absent')->get();

    //     foreach ($users as $user) {
    //         // Check if the 'leaveModel' relationship exists
    //         if ($user->leaveModel) {
    //             // Access the 'monthly' property from the related 'LeaveModel'
    //             $user->leaveModel->monthly = $user->leaveModel->monthly + 1;
    //             $user->leaveModel->yearly = $user->leaveModel->yearly + 1;
    //             $user->leaveModel->pending = 12 - $user->leaveModel->yearly;
    //             $user->leaveModel->save();
    //         }
    //     }
        
    //     return redirect()->back();


     

    //     $data = Auth::user();

    //     $id= $data->id;

    //     $user=LeaveModel::find($id);

    //     $user->monthly = $user->monthly +1;
    //     $user->yearly = $user->yearly +1;
    //     $user->pending = 12-$user->yearly;
    //     $user->save();

    //     return redirect()->back();
     

    // }


    // public function leave(){
    //     $user = Auth::user()->userleave->monthly+1;

    //     $user->save();

    //     echo $user;
    // }




    public function leave(){
        $user = Auth::user();
       $id=User::where('status','absent')->get();
       foreach($id as $id){
        $data=leaveModel::find($id->id);
        $data->monthly=$data->monthly+1;
        $data->yearly=$data->yearly+1;
        $data->pending=12-$data->yearly;
        $data->save();
        
       }
       return redirect()->back();
    
      }
      public function absent(){
        $id=User::where('role','user')->get();
        foreach($id as $id){
          $data=User::find($id->id);
          $data->status='absent';
          $data->save();
          
         }
         return redirect()->back();
    }
}
