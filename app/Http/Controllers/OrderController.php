<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends VoyagerBaseController
{
    function index(Request $request)
    {
        return view('vendor.voyager.registration.edit-add')->with('text', 'sveiki');
    }
    //
}
