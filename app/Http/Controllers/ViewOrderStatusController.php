<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ViewOrderStatusController extends Controller
{
    public function search(Request $request)
    {


        $search = $request->input('search');


        $order = Order::where('order_review_code', $search)
            ->first();

        if ($order != null){

            if ($order->findable == false){
                $order=null;
            }
        }




        return view('layouts.about_order')->with(['order'=>$order]);




    }

}
