<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    function showwelcome(){
        $users = DB::table('users')->get();
        return view('welcome',['users' => $users]);
    }
}
