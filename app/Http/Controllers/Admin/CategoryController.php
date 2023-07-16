<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryListResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
//    public function addCategory(){
//        return view('admin.addcategory');
//    }

    public function allCategory(){

        $categories = Category::all();

        if (!$categories) {
            // Return a not found response if user is not found
            return response()->json(['message' => 'Categories not found'], 404);
        }

        // Return the user data
       // return response()->json(['categories' => $categories], 200);
        return CategoryListResource::collection($categories);
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'slug' => 'required'
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        $category->save();

        // Optionally, return a response indicating the successful creation of the category
        return response()->json(['message' => 'Category created successfully'], 201);
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'slug' => 'required'
        ]);

        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        $category->save();

        // Optionally, return a response indicating the successful update of the category
        return response()->json(['message' => 'Category updated successfully'], 200);
    }


    public function deleteCategory($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->delete();

        // Optionally, return a response indicating the successful deletion of the category
        return response()->json(['message' => 'Category deleted successfully'], 200);
    }


}
