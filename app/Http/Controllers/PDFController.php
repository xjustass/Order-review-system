<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Dokumentas',
            'date' => date('Y/m/d')
        ];

        $pdf = PDF::loadView('PDF/PDF', $data);

        return $pdf->download('test.pdf');
    }
}
