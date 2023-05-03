<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::select('items.id', 'stock_no', 'items.description', 'uoms.name as uom_name', 'categories.code as cat_code', 'categories.description as cat_desc','reorder_point')
                    ->join('uoms', 'uom_id', '=', 'uoms.id')
                    ->join('categories','category_id','=','categories.id')
                    ->orderBy('description')
                    ->paginate(10);
                    //->get();
        $data = compact(['items']);

        //dd($items);
        return view('dashlite.item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
