<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        // return $categories;
        // name of view, [categories]
        return view('Categories.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name"=>"required|min:2"
        ]);
        $name = $request->get('name');
        // dd($name);
        // Category::create(['name'=>$request->get('name'),'logo'=>$request->get('logo')]);
        ###### use mass assignment
        Category::create($request->all());
        return to_route('categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return view('Categories.show',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
