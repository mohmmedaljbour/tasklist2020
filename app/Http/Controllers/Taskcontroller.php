<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Taskcontroller extends Controller
{
    public function index(){

        $tasks = DB::table('tasks')->get();
         return view('index',compact('tasks'));
    }
    public function show($id){

        $tasks = DB::table('tasks')->find($id);
       returen view('tasks.show',compact('tasks'));
    }
}
