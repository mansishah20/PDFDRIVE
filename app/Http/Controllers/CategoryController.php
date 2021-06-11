<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat= Category::all();  
		return view('category.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Category();  
        $cat->catname = $request->get('cat_name');  
        
        //$cat->caticon=$request->file('cat_icon')->store('caticons');   
        
        $request->validate([

            'cat_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->cat_icon->extension();  
        $request->cat_icon->move(public_path('catimages/'), $imageName);
        $cat->caticon = $imageName;

        $cat->save();
		
		return ("Category Record Saved");
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
        $cat= category::find($id);  
		return view('category.edit', compact('cat'));
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
        $cat =category::find($id);  
        $cat->catname =  $request->get('cat_name');  
        $cat->caticon = $request->get('cat_icon');  
        
        $cat->save();
		
		return ("Category Record Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat =category::find($id); 
		$cat->delete();
       return (" Category Record Deleted");
    }
}
