<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function destroy($id)
    {
        $admin = User::find($id);
        
        $admin->delete();
        return redirect('/admin');
    }
    public function edit($id)
    {
        $admin=User::find($id);
        return view('admin/edituserskill')->with('adminuser', $admin);
    }
    public function editrank($id)
    {
        $admin=User::find($id);
        if ($admin->rank === "user") {
            $admin->rank = "admin";
        } else {
            $admin->rank = "user";
        }
        $admin->update();
        return redirect('/admin');
    }
    public function show($id)
    {
        $user = User::find($id);
        $user->skills = $user->skills()->get();
        return view('/admin/showuserskill')->with('user', $user); 
    }

}
