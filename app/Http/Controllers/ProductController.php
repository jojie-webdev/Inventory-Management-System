<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $products = DB::table('products')->simplePaginate(6);
        return view('product.index', ['products' => $products]);
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
        $user = Auth::user()->id;
        $product = new Product($request->all());

        //get authenticated user->id
        $product->user_id = $user;

        //increment product->id
        $count = 1;
        $product->each(function($val) use(&$count){
            $val->row_count = $count;
            $count++;
        });

        //compare category value
        if( $product->c_name === 'Laptop') {
            DB::table('product_category')
                ->insert(['category_id' => 2, 'product_id' => $count, 'user_id' => $user]); 

            $product->save();
            return back()->with('message', 'Product Added Successfully!!');
        } else {
            DB::table('product_category')
                ->insert(['category_id' => 1, 'product_id' => $count, 'user_id' => $user]); 

            $product->save();
            return back()->with('message', 'Product Added Successfully!!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
