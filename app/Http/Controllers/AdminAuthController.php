<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function dashboard(){

        $category = Category::all();
        $brand = Brand::all();
        $admin = Admin::all();

        $data = [
            'category' => $category,
            'brand' => $brand,
            'admin' => $admin
        ];

        return view('backend.dashboard',$data);
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect('/');

    }


    public function password(){

        return view('backend.password');
    }



    public function updatePassword(Request $request)
    {
       $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
        ]);

        $user = Auth::guard('admin')->user();

        if (!Hash::check($request->current_password, $user->password)) {
            flash()->error('Current Password Does Not Match.');
        }else{

            $data['password'] = Hash::make($request->new_password);
            DB::table('admins')->where('id',Auth::guard('admin')->id())->update($data);
            flash()->success('Password Updated Successfully.');
            Auth::guard('admin')->logout();
        }

        return redirect('/');

    }



}
