<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Discussion;

class PostsController extends Controller
{
    public function index()
    {
    	$discussions = Discussion::all();
    	return view('forum.index',compact('discussions'));
    }

    public function show($id)
    {
    	$discussion = Discussion::findOrFail($id);
    	return view('forum.show',compact('discussion'));
    }
}
