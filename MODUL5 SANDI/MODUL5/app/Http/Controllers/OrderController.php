<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class OrderController extends Controller
{
    

    public function index()
    {
        
        $product = DB::table('products')->get();
        return view('order.index',compact('product'));
    }

    public function create(Request $request)
    {


    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'amount' => 'required',
            'buyer_name' => 'required',
            'buyer_contact' => 'required',
        ]);
        
        DB::table('orders')->insert([
            'product_id' => $request->product_id,
            'amount' => $request->amount,
            'buyer_name' => $request->buyer_name,
            'buyer_contact' => $request->buyer_contact,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
}
