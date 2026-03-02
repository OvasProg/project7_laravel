<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tags', ['tags' => Tag::all()]);
    }

    public function show(int $id)
    {
        return view('tag', ['tag' => Tag::find($id)]);
    }
}
