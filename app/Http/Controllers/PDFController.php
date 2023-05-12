<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


use PDF;

class PDFController extends Controller
{
    public function index(){
        $order = Order::get();
        return view('livewire.eporte-pdf-component',compact('order'));

        }
        public function eportpdf(){
            $order = Order::all();

            $pdf = PDF::loadView('livewire.eporte-pdf-component',['Order'=>$order]);
            return $pdf->download('order'.rand(1,1000).'.pdf');}



}
