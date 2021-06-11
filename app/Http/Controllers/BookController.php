<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = DB::Table('books')
        ->join('categories','books.catid','=','categories.id')
        ->select('books.id','books.bname','categories.catname','books.bauthor','books.blanguage','books.bpage','books.bpdf','books.bsize','books.bcover','books.bpubdate')
        ->get();


        return view('book.index', compact('book'));
    }
    

    public function testdata(){
        $book= Book::find(1)->getcat;
        return $book;

        
        //return view('book.index', compact('book'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$category = Category::all();
        return view("book.create", compact('category'));
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $bo = new Book();  
        $bo->bname =  $request->get('bname');  
        $bo->bauthor = $request->get('bauthor');  
        $bo->bpage = $request->get('bpage');  
        $bo->bsize = $request->get('bsize');  
        $request->validate([

            'bcover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bpdf' => 'required|mimes:pdf,xlx,csv|max:10000',
        ]);
        
        $imageName = time().'.'.$request->bcover->extension();  
        $request->bcover->move(public_path('bookimages/'), $imageName);
        $bo->bcover = $imageName;
        
        $fileName = time().'.'.$request->bpdf->extension();  
        $request->bpdf->move(public_path('bookpdf/'), $fileName);
        $bo->bpdf = $fileName;

        $bo->blanguage = $request->get('blanguage'); 
        $bo->bpubdate = $request->get('bpubdate'); 
        $bo->catid = $request->get('catid'); 
        $bo->save();
        //return back()
          //  ->with('success','you have successfully upload file.')
            //->with('bpdf',$fileName);
		return ("Book Record Saved");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book= book::find($id);  
		return view('book.edit', compact('book'));
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
        $book =book::find($id);  
		$book->bname =  $request->get('bname');  
        $book->bauthor = $request->get('bauthor');  
        $book->bpage = $request->get('bpage');  
        $book->bsize = $request->get('bsize');  
        $book->bcover = $request->get('bcover');  
        $book->blanguage = $request->get('blanguage'); 
        $book->bpubdate = $request->get('bpubdate'); 
        $book->catid = $request->get('catid'); 
		$book->save();
		
		return (" Book Record Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $bo =book::find($id); 
		 $bo->delete();
       return (" Book Record Deleted");
    }
}
