<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use Illuminate\Http\Request;

class FormValidation extends Controller
{
    function validationform(){

        
        return view('formvalidation');
    }
    function addUser(ValidationRequest $req){
        
        return $req->all();
    }
}
