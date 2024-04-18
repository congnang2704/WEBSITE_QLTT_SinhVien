<?php

namespace App\Http\Controllers;

use App\Models\sinhvien;
use App\Models\hocphan;
use App\Models\dieukien;
use App\Models\Loptc;
use App\Models\hoc;
use Illuminate\Http\Request;

class QuanLiHienThiController extends Controller
{

    public function index()
    {
        
        return view('hienthi.hienthi');
    }

    //Học phần
    public function indexHP()
    {
        
        $hp = hocphan::all();
        return view('hienthi.hienthiHP',  ['hp' => $hp]);
    }

    public function searchHP(Request $request)
    {
        $query = $request->input('query');

        $hp = hocphan::where('TenHP', 'like', '%'.$query.'%')
                    ->orWhere('SoTC', 'like', '%'.$query.'%')
                    ->orWhere('HeSoCKy', 'like', '%'.$query.'%')
                    ->get();

        return view('hienthi.hienthiHP', ['hp' => $hp]);
    }

    //Điều Kiện
    public function indexDK()
    {
        
        $dk = dieukien::all();
        return view('hienthi.hienthiDK',  ['dk' => $dk],);
    }
    public function searchDK(Request $request)
    {
        $query = $request->input('query');

        $dk = dieukien::where('Loai', 'like', '%'.$query.'%')
                    ->orWhere('MaHP', 'like', '%'.$query.'%')
                    ->get();

        return view('hienthi.hienthiDK', ['dk' => $dk]);
    }


    //Lớp TC
    public function indexLTC()
    {
        
        $ltc = Loptc::all();
        return view('hienthi.hienthiLTC',  ['ltc' => $ltc]);
    }

    public function searchLTC(Request $request)
    {
        $query = $request->input('query');

        $ltc = loptc::where('HocKy', 'like', '%'.$query.'%')
                    ->orWhere('MaHP', 'like', '%'.$query.'%')
                    ->get();

        return view('hienthi.hienthiLTC', ['ltc' => $ltc]);
    }

    //SInh viên
    public function indexSV()
    {
        
        $sv = sinhvien::all();
        return view('hienthi.hienthiSV',  ['sv' => $sv]);
    }
    public function searchSV(Request $request)
    {
        $query = $request->input('query');

        $sv = sinhvien::where('HoTen', 'like', '%'.$query.'%')
                    ->orWhere('GioiTinh', 'like', '%'.$query.'%')
                    ->orWhere('NgaySinh', 'like', '%'.$query.'%')
                    ->get();

        return view('hienthi.hienthiSV', ['sv' => $sv]);
    }

    //Học
    public function indexHoc()
    {
        
        $hc = hoc::all();
        return view('hienthi.hienthiHoc',  ['hc' => $hc]);
    }

    public function searchHoc(Request $request)
    {
        $query = $request->input('query');

        $hc = hoc::where('DiemQT', 'like', '%'.$query.'%')
                    ->orWhere('DiemCK', 'like', '%'.$query.'%')
                    ->orWhere('KetQua', 'like', '%'.$query.'%')
                    ->orWhere('MaSV', 'like', '%'.$query.'%')
                    ->orWhere('MaLop', 'like', '%'.$query.'%')
                    ->get();

        return view('hienthi.hienthiHoc', ['hc' => $hc]);
    }
}
