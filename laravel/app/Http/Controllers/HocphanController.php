<?php

namespace App\Http\Controllers;

use App\Models\hocphan;
use App\Models\dieukien;
use App\Models\Hocphan as ModelsHocphan;
use Illuminate\Http\Request;

class HocphanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hocphan = hocphan::all();
        return view('hocphans.index', ['hocphans' => $hocphan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hocphans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        hocphan::create($input);
        return redirect('hocphan')->with('flash_message', 'HOC PHAN Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $hocphan = hocphan::find($id);
        return view('hocphans.show')->with('hocphan', $hocphan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $hocphan = hocphan::find($id);
        return view('hocphans.edit')->with('hocphan', $hocphan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hocphan = hocphan::find($id);
        $input = $request->all();
        $hocphan->update($input);
        return redirect('hocphan')->with('flash_message', 'HOC PHAN Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        hocphan::destroy($id);
        return redirect('hocphan')->with('flash_message', 'HOC PHAN Deleted!');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $hocphan = hocphan::where('TenHP', 'like', '%'.$query.'%')
                    ->orWhere('SoTC', 'like', '%'.$query.'%')
                    ->orWhere('HeSoCKy', 'like', '%'.$query.'%')
                    ->get();

        return view('hocphans.index', ['hocphan' => $hocphan]);
    }

    // public function search(Request $request)
    // {
    //     $query = $request -> input('query');

    //     $hocphan = hocphan::where('TenHP', 'like', '%'.$query.'%')
    //                 -> orWhere('SoTC', 'like', '%'.$query.'%')
    //                 -> orWhere('HeSoCKy', 'like', '%'.$query.'%')
    //                 -> get();

    //     return view('hocphans.index', ['hocphan' => $hocphan]);
    // }
    
}
