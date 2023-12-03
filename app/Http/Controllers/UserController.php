<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        $users = User::all();
        return response($users);
    }

    public function user($id){
        $user = User::find($id);
        return response($user);
    }

    public function delete($id){
        $user = User::find($id);
        
        if($user == null){
            return response([
                "message"=>"Record not Found"
            ],404);
        }else{
            $user->delete();
            return response([
                "message"=>"Deleted Successfully!"
            ],200);
        }
    }


}
