<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;


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

   public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }

}
