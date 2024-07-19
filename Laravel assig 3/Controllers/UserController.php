<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Insert()
    {
        DB::table('users')->insert([
            'name' => 'rauof',
            'email' => 'rauof@gmail.com',
            'password' => '1234'
        ]);
        return response("Record inserted");
    }
    public function Select()
    {
        $users_data = DB::table('users')->select('name', 'email', 'password')->get();
        return view('index', ['users' => $users_data]);
    }
    public function Update()
    {
        $affected = DB::table('users')
            ->where('id', 1)
            ->update(['email' => 'mr@gmail.com']);
        return response('Record updated Successfully');
    }
    public function Delete()
    {
        DB::table('users')->where('id', 2)->delete();
        return response('Record deleted Successfully');
    }
}