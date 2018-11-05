<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
       public function index()
    {
        $users = User::latest()->paginate(5);
      
        return view('admin.index')->with('users',$users);
    }
      public function update(Request $request, $id)
    {
     
       User::find($id)->update(['roles'=> $request['roles']]);
        return redirect()->route('user.index');
    }

     public function destroy($id)
    {
    
        User::find($id)->delete();
        return redirect()->route('user.index');
    }

}
