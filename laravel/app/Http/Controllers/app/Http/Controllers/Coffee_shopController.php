<?php

namespace App\Http\Controllers;

use App\Models\Coffee_shop;
use Illuminate\Http\Request;


class Coffee_shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coffee_shops = Coffee_shop::all();
        return view('coffee_shops.index', ['coffee_shops' => $coffee_shops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coffee_shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Coffee_shop::create($input);
        return redirect('coffee_shop')->with('flash_message', 'Student Addedd!');
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
        $coffee_shop = Coffee_shop::find($id);
        return view('coffee_shops.show')->with('coffee_shops', $coffee_shop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Lấy thông tin student có id tương ứng
        $coffee_shop = Coffee_shop::find($id);
        return view('coffee_shops.edit')->with('coffee_shops', $coffee_shop);
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
        $coffee_shop = Coffee_shop::find($id);
        $input = $request->all();
        $coffee_shop->update($input);
        return redirect('coffee_shop')->with('flash_message', 'student Updated!');
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
        Coffee_shop::destroy($id);
        return redirect('coffee_shop')->with('flash_message', 'Student deleted!');
    }
}
