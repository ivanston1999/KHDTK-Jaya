<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'old-password' => 'required',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        $validator = request()->validate([
            'old-password' => 'required',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/change-password')
                ->withErrors($validator)
                ->withInput();
        }

        if (!Hash::check($request->input('old-password'), Auth::user()->password)) {
            return redirect('/change-password')
                ->with('error', 'The old password is incorrect.');
        }

        User::where('id', Auth::user()->id)
        ->update([
            'password' => Hash::make($validator['password']),
        ]);

        return redirect('/user-profile')
            ->with('success', 'Password changed successfully.');
    }

    public function changePassForm()
    {
        return view('session/change-password/changePassword');
    }

}
