<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(1);


        return view('vendor.voyager.order.browse', ['orders' => $orders]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('vendor.voyager.order.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $order = new Order();



        //Unique code for orders

        $code= $this->generateCode();

        while($this->codeExists($code)){

            $code= $this->generateCode();
        }

        $order->order_review_code =$code;
        $order->first_name = $request->name;
        $order->last_name = $request->last_name;
        $order->phone_number = $request->phone;
        $order->email = $request->email;
        $order->company_name = $request->bussines;
        $order->service = $request->product;
        $order->additional_info = $request->additional_info;
        $order->created_by = Auth::id();



        $order->save();




       /* $table->string('order_review_code',45);
        $table->string('first_name',45);
        $table->string('last_name',45);
        $table->string('phone_number',15);
        $table->string('email',45);
        $table->string('service',80);
        $table->string('work_performed', 80);
        $table->string('company_name',100);
        $table->string('additional_info',150);
        $table->float('price');
        $table->integer('status');
        $table->string('notes_for_client',100);
        $table->integer('created_by');
        $table->timestamps();
        */

        return redirect()->route('orders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    function generateCode(){

        $size = 12;
        $string = strtoupper(substr(md5(time().rand(10000,99999)), 0, $size));
        return $string;
    }

    function codeExists($code){

        return Order::where('order_review_code', $code) ->exists();
    }
}
