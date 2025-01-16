<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Media::where('title', 'LIKE', "%{$query}%")
            ->orWhere('summary', 'LIKE', "%{$query}%")
            ->get();

        return view('search', ['results' => $results, 'query' => $query]);
    }
    
    public function show(Media $media)
    {
        return view('details', ['item' => $media, 'type' => 'media']);
    }

    public function index()
    {
        $media = Media::all();
        return view('index', ['items' => $media, 'type' => 'media']);
    }
}
