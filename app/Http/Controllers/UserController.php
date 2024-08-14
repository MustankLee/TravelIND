<?php

namespace App\Http\Controllers;

use App\Models\TouristAttraction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexing_welcome_page() {
        $pass_data = TouristAttraction::all()->take(3);
        return view('welcome', compact('pass_data'));
    }

    public function indexing_liburan_page() {
        $pass_data = TouristAttraction::paginate(6);
        return view('liburan', compact('pass_data'));
    }

    public function display_login_form() {
        return view('Login.login');
    }

    public function display_regist_form() {
        return view ('Register.register');
    }

    public function display_tentang() {
        return view('tentang');
    }

    public function display_profile() {
        return view('profile_user');
    }

    public function display_update_profile_form() {
        return view('update_profile');
    }

    public function register_account(Request $data) {
        $data->validate([
            'user_name' => 'required',
            'email' => 'required|unique:users,email',
            'pw' => 'required|same:confirm-pw',
            'confirm-pw' => 'required',
        ]);

        // $object = $data->file('profile-img');
        // $name = $object->getClientOriginalName();
        // $extension = $object->getClientOriginalExtension();
        // $file_name = $name . time() . '.' . $extension;
        // $object->storeAs('public/avatars', $file_name);

        DB::table('users')->insert([
            'name' => $data->user_name,
            'email' => $data->email,
            'image' => "default.png",
            'password' => Hash::make($data->pw)
        ]);

        //return
        return redirect()->route('login');
    }

    public function update_account(Request $data){

        // $data->validate([
        //     'user_name' => 'required',
        //     'email' => 'required|unique:users,email',
        //     'pw' => 'required|same:confirm-pw',
        //     'confirm-pw' => 'required',
        // ]);
        // $file_name = $data->profile;

        $val_name = $data->user_name;
        $val_pw = $data->pw;
        $val_img = $data->profile;

        if(!$val_name) {
            $val_name = Auth::user()->name;
        }

        if(!$val_img) {
            $val_img = Auth::user()->image;
        }else if($val_img) {
            $object = $data->file('profile');
            $name = $object->getClientOriginalName();
            $extension = $object->getClientOriginalExtension();
            $file_name = $name . time() . '.' . $extension;
            $object->storeAs('public/avatars', $file_name);
            $val_img = $file_name;
        }

        $users = User::find($data->id);
        $users->name = $val_name;
        $users->image = $val_img;

        if($val_pw) {
            $users->password = Hash::make($val_pw);
    }

        $users->save();

       return redirect()->route('display_welcome_page');
    }

    public function display_detail_page(Request $data) {
        $temp = TouristAttraction::find($data->id);
        return view('detail', compact('temp'));
    }

}
