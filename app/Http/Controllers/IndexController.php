<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends Controller
{
    public function mainShow(){
        return view('home');
    }
    public function order(){
        return view('order');
    }
    public function top(){
        return view('top');
    }
    public function search(){
        return view('search');
    }
    public function findSomeThing(Request $request){
        $input = $request->title;
        $sql = Comic::WHERE("title","=",$input)->get();
        
        return view('search', ['answer'=>$sql]);
    }
    //konpni'ihm',mmjhg8ygk
}
