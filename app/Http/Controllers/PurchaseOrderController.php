<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Supplier;
use App\Models\PurchaseOrder;
use App\Models\Log;
use App\Models\Office;

class PurchaseOrderController extends Controller
{
    public function index() {
        $pos = PurchaseOrder::orderBy('date','desc')->paginate(50);
        $suppliers = Supplier::orderBy('name','asc')->get();
        $offices = Office::orderBy('name','asc')->get();

        $data = compact(['pos','suppliers','offices']);

        return view('dashlite01.purchase-order.index', $data);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'no' => 'required|unique:purchase_orders|max:255',
            'date' => 'required|date',
            'description' => 'required|max:255',
            'supplier_id' => 'required|integer'
        ]);

        try {
            DB::transaction(function () use ($request) {
                $po = new PurchaseOrder();
                $po->no = $request->no;
                $po->date = $request->date;
                $po->description = $request->description;
                $po->supplier_id = $request->supplier_id;

                $context = "";
                if($po->save()) {
                    $context = $po->toJson();

                    Log::create([
                        'user_id' => Auth::user()->id,
                        'action' => 'create purchase order',
                        'remoteconnection' => $_SERVER['COMPUTERNAME'] . ' # ' . $_SERVER['REMOTE_ADDR'],
                        'context' => '(' . $po->id . ') ' . $context
                    ]);

                    $request->session()->flash('success', 'Purchase Order has been created successfully');
                }
            });

            return redirect()->back();

           // return to_route('post.show', ['post' => $post->id]);
        }
        catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            $request->session()->flash('error', 'An error occurred while adding the purchase order: ' . $errorMessage);
            return redirect()->back();
        }
    }
}
