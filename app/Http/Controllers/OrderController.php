<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();
        return view('orders.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $order = order::find($id);
        $soft = $request->soft;
        if ($soft == 1) {
            $order->Delete();
            session()->flash('Add', 'Success Order');
        } elseif ($soft == 2) {

            $order = order::withTrashed()->where('id', $id)->first();
            $order->forceDelete();

            session()->flash('Add', 'Success Delete');
        } else {
            $order = order::withTrashed()->where('id', $id)->first();
            $order->restore();

            session()->flash('Add', 'Success Return');
        }

        return back();
    }

    public function archive()
    {
        $orders = order::onlyTrashed()->get();
        return view('orders.old', compact('orders'));
    }
}
