<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserUpdateController extends Controller
{
    //
    public function viewupdate ()
    {
        return view('function.edit');
    }

    public function userUpdate( Request $request)
    {
        $userUpdate = [
            'id'            =>  $request->idUpdate,
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'telephone'    =>  $request->telephone
        ];
        $User = User::findOrFail(Auth::user()->id);
        $User->name = $request->get('name');
        $User->email = $request->get('email');
        $User->telephone = $request->get('telephone');
        $User->save();
        return \Redirect::route('home', [$User->id])->with('message', 'User has been updated!');
    }
}
