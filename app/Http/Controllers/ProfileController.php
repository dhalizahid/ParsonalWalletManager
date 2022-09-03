<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use phpDocumentor\Reflection\Types\Null_;

class ProfileController extends Controller
{
    protected $validationRules = [
        'name' => 'required',
        'email' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
    ];
    public function edit()
    {
        $user = User::where('id',auth()->user()->id)->first();
        return view('profile_edit',compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request,$this->validationRules);
        $name = $request->name;
        $email = $request->email;
        $photo = Null;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $photo = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/user'),$photo);
        }
        // $user= $request->all();
        user::find(auth()->user()->id)->update([
            'name' => $name,
            'email'=> $email,
            'photo'=> $photo,
        ]);
        // return $file;

        return back();

    }
}
