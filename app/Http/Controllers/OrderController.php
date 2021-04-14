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
        $orders = Order::paginate(20);


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





        //Unique code for orders

        $code= $this->generateCode();

        while($this->codeExists($code)){

            $code= $this->generateCode();
        }

        $request->validate([
            'name' => 'required|max:45',
            'last_name' => 'required|max:45',
            'phone' => 'required|max:15',
            'email' => 'required|max:320',
            'bussines' => 'max:45',
            'product' => 'required|max:45',
            'additional_info' => 'required',
        ]);

        $order = new Order();
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

        return redirect()->route('orders.index') ->with('success', 'Užsakymas sukurtas sėkmingai');

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
        return view('vendor.voyager.order.edit', compact('order'));
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


        $request->validate([
            'name' => 'required|max:45',
            'last_name' => 'required|max:45',
            'phone' => 'required|max:15',
            'email' => 'required|max:320',
            'bussines' => 'max:45',
            'product' => 'required|max:80',
            'additional_info' => 'max:150',
            'status' => 'required|max:1',
            'price' => 'max:10',
            'work_performed' => 'max:80',
            'notes_for_client' => 'max:100',
        ]);


        $order->first_name = $request->name;
        $order->last_name = $request->last_name;
        $order->phone_number = $request->phone;
        $order->email = $request->email;
        $order->company_name = $request->bussines;
        $order->service = $request->product;
        $order->additional_info = $request->additional_info;

        $order->status = $request->status;
        $order->price = $request->price;
        $order->work_performed = $request->work_performed;
        $order->notes_for_client = $request->notes_for_client;
        $order->save();



        return redirect()->route('orders.index')
            ->with('success', 'Užsakymas atnaujintas sėkmingai');
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
