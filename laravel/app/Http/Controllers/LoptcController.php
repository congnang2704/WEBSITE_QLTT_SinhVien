<?php

namespace App\Http\Controllers;

use App\Models\loptc;
use App\Models\hocphan;
use Illuminate\Http\Request;

class LoptcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loptc = \App\Models\dieukien::with('hocphan')->get();
        return view('loptcs.index', ['loptcs' => $loptc]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hocphan = hocphan::all();
        return view('loptcs.create', ['hocphan' => $hocphan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        loptc::create($input);
        return redirect('loptc')->with('flash_message', 'LOP TC Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $loptc = loptc::find($id);
        return view('loptcs.show')->with('loptc', $loptc);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($MaHPDK)
    {
        $hocphan = hocphan::all();
        $loptc = loptc::find($MaHPDK);
        return view('loptcs.edit', compact('hocphan', 'loptc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $loptc = loptc::find($id);
        $input = $request->all();
        $loptc->update($input);
        return redirect('loptc')->with('flash_message', 'LOP TC Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     loptc::destroy($id);
    //     return redirect('loptc')->with('flash_message', 'LOP TC Deleted!');
    // }

    public function destroy($id)
    {
        try {
            // Xóa phòng
            loptc::destroy($id);
            // Đặt thông báo thành công vào session flash
            session()->flash('success', 'Lop TC deleted successfully!');
        } catch (\Exception $e) {
            // Đặt thông báo lỗi vào session flash
            session()->flash('error', 'Error deleting Lop TC: ' . $e->getMessage());
        }
        // Chuyển hướng về trang danh sách phòng
        return redirect('loptc');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $loptc = loptc::where('HocKy', 'like', '%'.$query.'%')
                    ->orWhere('MaHP', 'like', '%'.$query.'%')
                    ->get();

        return view('loptcs.index', ['loptc' => $loptc]);
    }

}
