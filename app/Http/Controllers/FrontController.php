<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=\TCG\Voyager\Models\Post::find($id);



        return view('layouts.post', ['p' => $post]);
    }

}
