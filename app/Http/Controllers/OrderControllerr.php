<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrderControllerr extends VoyagerBaseController
{
    function index(Request $request)
    {



        return view('vendor.voyager.order.edit-add')->with('text', 'sveiki');
    }
    //
}
