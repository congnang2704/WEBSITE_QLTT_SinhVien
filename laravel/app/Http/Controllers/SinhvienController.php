<?php

namespace App\Http\Controllers;

use App\Models\sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhvien = sinhvien::all();
        return view('sinhviens.index', ['sinhviens' => $sinhvien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sinhviens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        sinhvien::create($input);
        return redirect('sinhvien')->with('flash_message', 'SINH VIEN Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sinhvien = sinhvien::find($id);
        return view('sinhviens.show')->with('sinhvien', $sinhvien);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sinhvien = sinhvien::find($id);
        return view('sinhviens.edit')->with('sinhvien', $sinhvien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sinhvien = sinhvien::find($id);
        $input = $request->all();
        $sinhvien->update($input);
        return redirect('sinhvien')->with('flash_message', 'SINH VIEN Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        sinhvien::destroy($id);
        return redirect('sinhvien')->with('flash_message', 'SINH VIEN Deleted!');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $sinhvien = sinhvien::where('HoTen', 'like', '%'.$query.'%')
                    ->orWhere('GioiTinh', 'like', '%'.$query.'%')
                    ->orWhere('NgaySinh', 'like', '%'.$query.'%')
                    ->get();

        return view('sinhviens.index', ['sinhvien' => $sinhvien]);
    }

    public function showTable()
    {
        $sinhvien = sinhvien::all();

        return view('sinhvien', ['data' => $sinhvien]);
    }
}
