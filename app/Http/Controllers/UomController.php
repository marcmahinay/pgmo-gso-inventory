<?php

namespace App\Http\Controllers;

use App\Models\Uom;
use Illuminate\Http\Request;

class UomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uoms = Uom::select('id', 'name', 'description')
                    ->orderBy('name')
                    ->paginate(20);
                    //->get();
        $data = compact(['uoms']);

        //dd($items);
        return view('dashlite.uom.index', $data);
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
    public function show(Uom $uom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Uom $uom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Uom $uom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Uom $uom)
    {
        //
    }
}
