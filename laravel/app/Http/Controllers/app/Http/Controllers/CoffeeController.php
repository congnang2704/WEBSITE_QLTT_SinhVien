<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Coffee_shop;
use App\Models\Supplier;
use Illuminate\Http\Request;


class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coffees = Coffee::all();
        return view('coffees.index', ['coffees' => $coffees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coffee_shops = Coffee_shop::all();
        $suppliers = Supplier::all();
        return view('coffees.create', compact('coffee_shops', 'suppliers'));
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
        Coffee::create($input);
        return redirect('coffee')->with('flash_message', 'Student Addedd!');
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
        $coffee = Coffee::find($id);
        return view('coffees.show')->with('coffees', $coffee);
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
        $suppliers = Supplier::all();
        $coffee_shops = Coffee_shop::all();
        $coffees = Coffee::find($id);

        return view('coffees.edit', compact('coffees','suppliers','coffee_shops'));
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
        $coffee = Coffee::find($id);
        $input = $request->all();
        $coffee->update($input);
        return redirect('coffee')->with('flash_message', 'student Updated!');
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
        Coffee::destroy($id);
        return redirect('coffee')->with('flash_message', 'Student deleted!');
    }
}
