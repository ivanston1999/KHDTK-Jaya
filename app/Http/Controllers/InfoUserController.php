<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class InfoUserController extends Controller
{

    public function create()
    {
        return view('admin/user-profile');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'phone'     => ['max:50'],
            'location' => ['max:70'],
            'about_me'    => ['max:150'],
        ]);
        if($request->get('name') != Auth::user()->name)
        {
            if(env('IS_DEMO') && Auth::user()->id == 1)
            {
                return redirect()->back()->withErrors(['msg2' => 'You can\'t change name.']);
                
            }
            
        }
        else{
            $attribute = request()->validate([
                'name' => ['required', 'name', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            ]);
        }
        
        
        User::where('id',Auth::user()->id)
        ->update([
            'name'    => $attributes['name'],
            'phone'     => $attributes['phone'],
            'location' => $attributes['location'],
            'about_me'    => $attributes["about_me"],
        ]);


        return redirect('/user-profile')->with('success','Profile updated successfully');
    }
}
