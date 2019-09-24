<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerContorller extends Controller
{
    public function index(){
       // return 'index()';
       $customers = [1,2,3,4,5];
       return view('customers.index')
       ->with(['customers' => $customers]);
    }

    public function show($id){
       // return 'show()'.$id;
       return view('customers.show')
       ->with(['id'=>$id]);
    }
}
