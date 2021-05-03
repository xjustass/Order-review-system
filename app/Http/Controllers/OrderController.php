<?php

namespace App\Http\Controllers;


use App\Mail\OrderCompleted;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Mail\OrderRegistered;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(20);


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
    public function store(StoreOrderRequest $request)
    {
        //Unique code for orders

        $code= $this->generateCode();

        while($this->codeExists($code)){

            $code= $this->generateCode();
        }

        $order = new Order();
        $order->order_review_code =$code;
        $order->first_name = $request->fname;
        $order->last_name = $request->lname;
        $order->phone_number = $request->phone;
        $order->email = $request->email;
        $order->company_name = $request->bussines;
        $order->service = $request->product;
        $order->additional_info = $request->additional_info;
        $order->created_by = Auth::id();
        $order->save();

        route('search', ['post' => 1]);

        $url = URL::to('/search?search='.$order->order_review_code);
        Mail::to($order->email)->send(new OrderRegistered($url));

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
        return view('vendor.voyager.order.show', compact('order'));
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
    public function update(UpdateOrderRequest $request, Order $order)
    {
        if ($order->status != 2){
            if ($request->status==2){
                $url = URL::to('/search?search='.$order->order_review_code);
                Mail::to($order->email)->send(new OrderCompleted($url));
            }

        }

        $order->first_name = $request->fname;
        $order->last_name = $request->lname;
        $order->phone_number = $request->phone;
        $order->email = $request->email;
        $order->company_name = $request->bussines;
        $order->service = $request->product;
        $order->additional_info = $request->additional_info;
        $order->status = $request->status;
        $order->price = $request->price;
        $order->work_performed = $request->work_performed;
        $order->notes_for_client = $request->notes_for_client;
        $order->findable = $this->changeOrderIsFindible($order->status);
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

        $order->delete();

        return redirect()->route('orders.index') ->with('success', 'Užsakymas ištrintas sėkmingai');
    }

    function generateCode(){

        $size = 12;
        $string = strtoupper(substr(md5(time().rand(10000,99999)), 0, $size));
        return $string;
    }

    function codeExists($code){

        return Order::where('order_review_code', $code) ->exists();
    }

    function changeOrderIsFindible( $status) {

        $findable = 0;

        switch ($status) {
            case 0:
                $findable = 1;
                break;
            case 1:
                $findable = 1;
                break;
            case 2:
                $findable = 1;
                break;

            case 3:
                $findable = 0;
                break;
        }
        return $findable;

    }

    public function search(Request $request){



        $search = $request->input('search');

        $orders = Order::query()
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('first_name', 'LIKE', "%{$search}%")
            ->orWhere('last_name', 'LIKE', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(20);


        // Return the search view with the resluts compacted

        return view('vendor.voyager.order.browse', ['orders' => $orders]);
    }

}
