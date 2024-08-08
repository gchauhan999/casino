<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('frontend.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:15|unique:users,phone_number,' . $user->id,
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'zipCode' => 'required|string|max:10',
            'about' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/account'), $filename);
            $user->picture = $filename;
        }

        $user->update($request->only('firstname', 'lastname', 'username', 'email', 'phone_number', 'country', 'address', 'zipCode', 'about'));

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
