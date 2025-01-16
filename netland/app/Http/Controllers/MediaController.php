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
    /**
     * Display a listing of the resource.
     */
    public function show(Media $media)
    {
        return view('details', ['item' => $media, 'type' => 'media']);
    }

    public function index()
    {
        $media = Media::all();
        return view('index', ['items' => $media, 'type' => 'media']);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
