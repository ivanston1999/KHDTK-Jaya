<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        $attributes = request()->validate([
            'old-password' => ['required'],
            'password' => ['required, alpha_num, min:8'],
        ]);

        if (!Hash::check($request->input('old-password'), Auth::user()->password)) {
            return redirect('/change-password')
                ->with('error', 'The old password is incorrect.');
        }

        User::where('id', Auth::user()->id)
        ->update([
            'password' => Hash::make($attributes['password']),
        ]);

        return redirect('/user-profile')
            ->with('success', 'Password changed successfully.');
    }

    public function changePassForm()
    {
        return view('session/change-password/changePassword');
    }

}
