<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
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
            $file->move('assets/uploads/category',$filename);
            $category->gallery=$filename;

        }
        $category->name = $req ->input('name');
        $category->description = $req ->input('description');
        $category->save();
        return redirect('categories')->with('status',"Category Added Successfully");
    } 
    public function editCategory($id){
        $category = Category::find($id);
        return view('Category.editCategory', compact('category') );
    }
    public function updateCategory(Request $req, $id)
    {
        $category = Category::find($id);
        $category->name = $req ->input('name');
        $category->description = $req ->input('description');
        if($req->hasFile('gallery')){
            $path = 'assets/uploads/category/'.$category->gallery;
            
            if(File::exists($path)){
                File::delete($path);
            }
            
            $file = $req->file('gallery');
            //dd($file);
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->gallery=$filename;

        }
        //$category->gallery = $req ->input('gallery');
        $category->update();
        
        return redirect('categories')->with('status',"Category Updated Successfully");
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('status',"Category Deleted Successfully");
    }
    /*public function queryLog(Request $req)
    {
        $category = Category::toSql();
        dd($category);

    }*/
}
