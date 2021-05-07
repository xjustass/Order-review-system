<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Order $order)
    {


        $data = [
            'title' => 'Užsakymo registracijos pažyma',
            'date' => date('Y/m/d'),
            'name' => $order->first_name,
            'last_name' => $order->last_name,
            'company_name' => $order->company_name,
            'service' => $order->service,
            'info' => $order->additional_info,
            'code' => $order->order_review_code,
            'id' => $order->id

        ];


        $pdf = PDF::loadView('PDF/PDF', $data);
        return $pdf->download($order->id.' '. $order->first_name.'.pdf');
    }
}
