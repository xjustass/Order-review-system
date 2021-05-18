<?php

namespace App\Http\Controllers;

use App\Models\ServicePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PriceController extends Controller
{
    protected function guard()
    {
        return Auth::guard(app('VoyagerGuard'));
    }

    public function index()
    {

        $this->authorize('isAdmin');

        $services = ServicePrice::all();

        return view('vendor.voyager.text.prices.browse',  ['services' => $services]);

    }


    public function create()
    {
        $this->authorize('isAdmin');
        return view('vendor.voyager.text.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('isAdmin');

        $request->validate([
            'service_name' => 'required|max:255',
            'price' => 'required|numeric',
        ]);

        $service = new ServicePrice();
        $service->service_name = $request->service_name;
        $service->price =$request->price;
        $service->save();

        return redirect()->route('prices.index') ->with('success', 'Kaina pridėta sėkmingai');
    }



    public function edit(ServicePrice $price)
    {

        $this->authorize('isAdmin');
        return view('vendor.voyager.text.prices.edit', compact('price'));
    }

    public function update(Request $request,  $id)
    {
        $this->authorize('isAdmin');
        $service=ServicePrice::find($id);

        $request->validate([
            'service_name' => 'required|max:255',
            'price' => 'required|numeric',
        ]);


        $service->service_name =$request->service_name;
        $service->price= $request->price;
        $service->save();

        return redirect()->route('prices.index')
            ->with('success', 'Kaina atnaujinta sėkmingai');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        $service = ServicePrice::find($id);
        $service->delete();

        return redirect()->back();
    }
}
