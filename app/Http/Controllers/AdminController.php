<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    //
    public function user(){
        $users = user::all();
        return view("admin.users",compact("users"));
    }
    public function deleteuser($id){
        $user = user::find($id);
        $user->delete();
        return redirect()->back();
    }
}
