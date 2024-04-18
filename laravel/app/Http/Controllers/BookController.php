<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('books.index',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Book::create($input);
        return redirect('book')->with('flash_message', 'Book Addedd!'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        // $book = DB::table('books')->where('bookid',$id)->first();       
        //$book = Book::where('bookid',$id)->first();        
        $book = Book::where('bookid',$id)->get();       
        return view('books.show')->with('book', $book[0]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Book::destroy($id);        
        DB::table('books')->where('bookid', '=', $id)->delete();
        return redirect('book')->with('flash_message', 'Book deleted!'); 
    }
}
