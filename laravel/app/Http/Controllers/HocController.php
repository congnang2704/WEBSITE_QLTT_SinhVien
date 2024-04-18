<?php

namespace App\Http\Controllers;

use App\Models\loptc;
use App\Models\sinhvien;
use App\Models\hoc;
use Illuminate\Http\Request;

class HocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hoc = \App\Models\hoc::with('loptc', 'sinhvien')->get();
        return view('hocs.index', ['hocs' => $hoc]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loptc = loptc::all();
        $sinhvien = sinhvien::all();
        return view('hocs.create', ['loptc' => $loptc], ['sinhvien' => $sinhvien]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        hoc::create($input);
        return redirect('hoc')->with('flash_message', 'LOP TC Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $hoc = hoc::find($id);
        return view('hocs.show')->with('hoc', $hoc);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $loptc = loptc::all();
        $sinhvien = sinhvien::all();
        $hoc = hoc::find($id);
        return view('hocs.edit', compact('loptc','sinhvien', 'hoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hoc = hoc::find($id);
        $input = $request->all();
        $hoc->update($input);
        return redirect('hoc')->with('flash_message', 'LOP TC Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     hoc::destroy($id);
    //     return redirect('hoc')->with('flash_message', 'LOP TC Deleted!');
    // }

    public function destroy($id)
    {
        try {
            // Xóa phòng
            hoc::destroy($id);
            // Đặt thông báo thành công vào session flash
            session()->flash('success', 'Học deleted successfully!');
        } catch (\Exception $e) {
            // Đặt thông báo lỗi vào session flash
            session()->flash('error', 'Error deleting Hoc: ' . $e->getMessage());
        }
        // Chuyển hướng về trang danh sách phòng
        return redirect('hoc');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        $hoc = hoc::where('DiemQT', 'like', '%'.$query.'%')
                    ->orWhere('DiemCK', 'like', '%'.$query.'%')
                    ->orWhere('KetQua', 'like', '%'.$query.'%')
                    ->orWhere('MaSV', 'like', '%'.$query.'%')
                    ->orWhere('MaLop', 'like', '%'.$query.'%')
                    ->get();

        return view('hocs.index', ['hoc' => $hoc]);
    }
}
