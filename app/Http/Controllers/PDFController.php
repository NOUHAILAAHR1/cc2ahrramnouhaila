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
    public function generatePDF()
    {
        $order = Order::get();

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'subtotal' => 0,
            'tax' => 0,
            'total' => 0,
            'order' => $order
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}
