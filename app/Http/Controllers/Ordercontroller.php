<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Auth::user()->usercomorder()->get();
        // dd($orders);
       return view('company.order.index',compact('orders'));
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
    public function store(Request $request)
    {
        $request->validate([
            'seller_id'=>'required',
            'item_id'=>'required',
            'Quantity'=>'required',
            'cprice'=>'required|numeric',
            'qty'=>'required',
        ]);
        if($request->qty<$request->Quantity){

            $request->session()->flash('msg','Please enter Qty less then Quantity');
            return redirect()->back();
        }
        // dd($request);
        Order::create([
            'buyer_id'=>Auth::user()->id,
        'seller_id'=>$request->seller_id,
        'item_id'=>$request->item_id,
        'Quantity'=>$request->Quantity,
        'cprice'=>isset($request->cprice)?$request->cprice:'',
        ]);
        $request->session()->flash('msg','Your Order is placed');
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order($id)
    {
        //dd(Stock::find($id));
        $stock=Stock::find($id);
        $pro=new Order();
        return view('company.order.place',compact('stock','pro'));

    }
    
    public function orderview()
    {
        //dd(Stock::find($id));
        $orders=Order::all()->where('seller_id',Auth::user()->id);
        return view('company.order.view',compact('orders'));

    }
    public function orderconfirm($id)
    {
        // dd(Stock::find($id));
        $orders=Order::find($id);
    $orders->confirm=!$orders->confirm;
    $orders->save();
        return redirect('farmer/order');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
