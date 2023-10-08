<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;


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
    public function store(StoreCategoryRequest $request)
    {
        //
        // $request->validate([
        //     "name"=>"required|min:2"
        // ]);
        $name = $request->get('name');
        // dd($name);
        // Category::create(['name'=>$request->get('name'),'logo'=>$request->get('logo')]);
        ###### use mass assignment
        $request_data = $request->all();
        if($request->hasFile("logo")){
            $logo = $request_data["logo"];
            $path = $logo->store("Up_logo","category_logo");
            $request_data["logo"] = $path;
        }
        Category::create($request_data);
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
        return view('Categories.edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
        // $request->validate(['name'=>'required|min:2' , 'logo'=>'required']);
        $category->update($request->all());
        return to_route('categories.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        if( $category->logo){
            try{
                unlink("images/Category_logo/{$category->logo}");
            }
            catch(\Exception $e){
                dd($e);

            }
        }
        $category->delete();
        return to_route('categories.index');
    }
}
