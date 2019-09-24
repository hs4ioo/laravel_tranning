<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerContorller extends Controller
{
    public function index(){
        return 'index()';
    }

    public function show($id){
        return 'show()'.$id;
    }
}
