<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB\facade;


class Taskcontroller extends Controller
{
    public function index(){

        $tasks = DB::table('tasks')->get();
         return view('index',compact('tasks'));
    }
    public function show($id){

        $tasks = DB::table('tasks')->find($id);


       returen view( 'tasks.show', compact('tasks')) ;
    }
public function store (Request $request ){

    DB::table('tasks')->insert ([

'name'=>$request -> name ,
'created_at'=>now(),
'updated_at'=>now(),
    ]);
return redirect() ->back();
}
public function destroy (){

    DB::table('tasks')->where ('id','=',$id)-> delete();
    return redirect() ->back();

}
public function edit(task $task)
{
    return view('tasks.index',compact('task'));
}
public function update(Request $request, task $task)
    {
        $request->validate([
            'name' => 'required',
           
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('tasks.index')
                        ->with('success','task updated successfully');
    }
}
