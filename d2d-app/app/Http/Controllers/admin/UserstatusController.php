<?php


namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\User;


class UserstatusController extends Controller
{
    public function index()
    {
    	$users = \App\User::get();
    	return view('admin.user.index',compact('users'));
    }




    public function status(Request $request, $id){
        if($request->status!=""){
            if($request->status=="1"){
                $request->status = "0";
            } else {
                $request->status = "1";
            }
        }

        $users  = \App\User::where('id',$id)->first();
        $users->row_status = $request->status;

        $users->save();
        return redirect('la-admin/user');
    }

}
