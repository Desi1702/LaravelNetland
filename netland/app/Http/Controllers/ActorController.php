<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('index', ['items' => $actors, 'type' => 'actor']);
    }

    public function show(Actor $actor)
    {
        return view('details', ['item' => $actor, 'type' => 'actor']);
    }

}
