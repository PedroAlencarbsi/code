<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        
        $name = "pedro";
        $age = "21";
        $arr = [1,2,3,4,5];

    return view('welcome',
        [
            'name' => $name, 
            'age' => $age, 
            'profissao' => "programador",
            'arr' => $arr
        ]
    );
    }
    
    public function create()
    {
        return view('events.create');
    }

    public function product($id = null)
    {
        return view('product',['id' => $id]);
    }

    public function products()
    {
        $busca = request('search');
        return view('products',['busca' => $busca]);
    }

    public function contact()
    {
        return view('contact');
    }

}
