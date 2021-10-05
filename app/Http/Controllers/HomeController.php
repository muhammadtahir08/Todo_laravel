<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('Todo')->get();
        //echo $todo;
        return view('show',["todo"=>$data]);
    }

    public function create(Request $request)
    {
        $title=$request->input('title');
        $description = $request->input('description');
        if(!$request->has('completed'))
        {
            $completed=false;
        }
        else
        {
            $completed = true;
        }
        $data=array("title"=>$title,"description"=>$description,"completed"=>$completed);
        DB::table('Todo')->insert($data);
        echo"data is successfully saved";
       //DB::insert('insert into Todo (id, name) values (?, ?)', [1, 'Dayle']);
    }
}
