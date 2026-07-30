<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function get_students(){
        $students = DB::table('students')->paginate(3);
        return view('contact',['students' => $students]);
    }
    function singleUser($id){
        $user = DB::table('students')->find($id);
        return view('updateStudent',['data' => $user]);
        return $user;
    }
    function addUser(Request $req){
        $user = DB::table('students')
        ->insert([
            'name' => $req->name,
            'age' => $req->age,
            'city' => $req->city,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($user){
            echo '<h2>Data Added Successfully</h2>';
        }
    }
    function updateUser(Request $req,$id){
        $user = DB::table('students')
        ->where('id', $id)
        ->update(
            [
                'name' => $req->name,
            'age' => $req->age,
            'city' => $req->city,
            'updated_at' => now()
            ]
        );
        if($user){
            return redirect('/students');
            }
            }
            function deleteUser($id){
                $user = DB::table('students')
                ->where('id',$id)
                ->delete();
                if($user){
                    return redirect('/students');
                    
        }
    }
}
