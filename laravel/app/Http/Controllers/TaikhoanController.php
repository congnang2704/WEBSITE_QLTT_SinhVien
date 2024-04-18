<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buucuc;
use App\Models\Taikhoan;
use App\Models\Giaodich;

class TaikhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $taikhoan = Taikhoan::all();
        return view('taikhoan.index', ['taikhoan' => $taikhoan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buucuc = Buucuc::all();
        return view('taikhoan.create', ['buucuc' => $buucuc]);
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
        Taikhoan::create($input);
        return redirect('taikhoan')->with('flash_message', 'Account Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($MaTK)
    {
        //
        $taikhoan = Taikhoan::find($MaTK);
        return view('taikhoan.show')->with('taikhoan', $taikhoan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($MaTK)
    {
        //Lấy thông tin student có id tương ứng
       
        $buucuc = Buucuc::all();
        $taikhoan = Taikhoan::find($MaTK);

        return view('taikhoan.edit', compact('buucuc','taikhoan'));
      
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaTK)
    {
        //
        $taikhoan = Taikhoan::find($MaTK);
        $input = $request->all();
        $taikhoan->update($input);
        return redirect('taikhoan')->with('flash_message', 'Account Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaTK)
    {
        //
        Taikhoan::destroy($MaTK);
        return redirect('taikhoan')->with('flash_message', 'Account Deleted!');
    }

    public function delete($MaTK)
    {
        try {
            $taikhoan = Taikhoan::findOrFail($MaTK);
            $taikhoan->delete();
            return redirect()->route('taikhoan.index')->with('success');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->route('taikhoan.index')->with('error');
        }
    }
}
