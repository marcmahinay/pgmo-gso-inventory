<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class InventoryController extends Controller
{
    public function stock() {

        $items = Item::select('items.id', 'stock_no', 'items.description', 'uoms.name as uom_name', 'categories.code as cat_code', 'current_quantity', 'average_unit_cost', 'current_total_cost', 'reorder')
                    ->join('uoms', 'uom_id', '=', 'uoms.id')
                    ->join('categories','category_id','=','categories.id')
                    ->orderBy('description')
                    ->paginate(10);
                    //->get();
        $data = compact(['items']);

        //dd($items);
        return view('dashlite01.stock-inventory.stock', $data);
    }

    public function stockAir() {

        $items = Item::select('items.id', 'stock_no', 'items.description', 'uoms.name as uom_name', 'categories.code as cat_code', 'current_quantity', 'average_unit_cost', 'current_total_cost', 'reorder')
                    ->join('uoms', 'uom_id', '=', 'uoms.id')
                    ->join('categories','category_id','=','categories.id')
                    ->orderBy('description')
                    ->paginate(10);
                    //->get();
        $data = compact(['items']);

        //dd($items);
        return view('dashlite01.stock-inventory.stock-air', $data);
    }


}
