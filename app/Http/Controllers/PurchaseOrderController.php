<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;

class PurchaseOrderController extends Controller
{
    public function index() {
        $pos = PurchaseOrder::get();
        
        $data = compact('pos');

        return view('dashlite01.purchase-order.index', $data);
    }
}
