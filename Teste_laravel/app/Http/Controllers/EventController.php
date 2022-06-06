<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        
        $events = Event::all();

    return view('welcome',['events'=> $events]);
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

    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request ->title;
        $event->city = $request ->city;
        $event->private = $request ->private;
        $event->description = $request ->description;
        $event->save();

        return redirect('/');

    }

}
