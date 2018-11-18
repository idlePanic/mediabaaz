<?php

namespace App\Http\Controllers;

use App\Cast;
use App\Director;
use App\Movie;
use App\Role;
use App\User;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function movieManaging()
    {
        $movies=Movie::paginate(15);
        return view('admin.movie_managing',compact('movies'));
    }

    public function showAdmins()
    {
        $admins = User::where('is_admin',1)->get();
        $roles = Role::all();
        return view('admin.admin',compact('admins','roles'));
    }

    public function showUsers()
    {
        $users = User::paginate(10);
        return view('admin.users',compact('users'));
    }

    public function editRoles(Request $request , User $user)
    {

        if($user->roles[0]->id != $request->role)
        {
            \DB::table('role_user')->where('user_id',$user->id)->update(['role_id'=>$request->role]);
            return back();
        }
        return back();

    }

    public function setAdmin(User $user)
    {
        DB::table('users')->where('id',$user->id)->update(['is_admin'=>1]);
        DB::table('role_user')->insert(['role_id'=>'1','user_id' => $user->id]);
        return back();
    }

    public function setUser(User $user)
    {
        DB::table('users')->where('id',$user->id)->update(['is_admin'=>0]);
        DB::table('role_user')->where('user_id', '=' , $user->id)->delete();
        return back();
    }
}
