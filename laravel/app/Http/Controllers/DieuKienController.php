<?php

namespace App\Http\Controllers;

use App\Models\dieukien;
use App\Models\hocphan;
use Illuminate\Http\Request;

class DieukienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dieukien =  \App\Models\dieukien::with('hocphan')->get();
        return view('dieukiens.index', ['dieukiens' => $dieukien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hocphan = hocphan::all();
        return view('dieukiens.create', ['hocphan' => $hocphan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        dieukien::create($input);
        return redirect('dieukien')->with('flash_message', 'DIEU KIEN Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dieukien = dieukien::find($id);
        return view('dieukiens.show')->with('dieukien', $dieukien);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($MaHPDK)
    {
        $hocphan = hocphan::all();
        $dieukien = dieukien::find($MaHPDK);
        return view('dieukiens.edit', compact('hocphan', 'dieukien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dieukien = dieukien::find($id);
        $input = $request->all();
        $dieukien->update($input);
        return redirect('dieukien')->with('flash_message', 'DIEU KIEN Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     dieukien::destroy($id);
    //     return redirect('dieukien')->with('flash_message', 'DIEU KIEN Deleted!');
    // }

    public function destroy($id)
    {
        try {
            // Xóa phòng
            dieukien::destroy($id);
            // Đặt thông báo thành công vào session flash
            session()->flash('success', 'DIEU KIEN deleted successfully!');
        } catch (\Exception $e) {
            // Đặt thông báo lỗi vào session flash
            session()->flash('error', 'Error deleting DIEU KIEN: ' . $e->getMessage());
        }
        // Chuyển hướng về trang danh sách phòng
        return redirect('dieukien');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $dieukien = dieukien::where('Loai', 'like', '%'.$query.'%')
                    ->orWhere('MaHP', 'like', '%'.$query.'%')
                    ->get();

        return view('dieukiens.index', ['dieukien' => $dieukien]);
    }
}
