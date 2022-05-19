<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categoryList()
    {
        $category = Category::all();
        return view('Category.categorylist', compact('category'));
    }
    public function addCategory(Request $req)
    {
        
        return view('Category.create');
    } 
    public function insertCategory(Request $req)
    {
        $category = new Category();
        if($req->hasFile('gallery')){
            $file = $req->file('gallery');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/category'.$filename);
            $category->gallery=$filename;

        }
        $category->name = $req ->input('name');
        $category->description = $req ->input('description');
        $category->save();
        return redirect('categories')->with('status',"Category Added Successfully");
    } 
}
