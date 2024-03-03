<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategories() {

        $categories = Category::all();
        return view('admin.categories.all-categories', compact('categories'));
    }

    public function createCategory() {

        return view('admin.categories.create-category');
    }

    public function storeCategory(Request $request) {

        $category = new Category();
        $category -> categoryName = $request -> categoryName;
        $category -> categoryDescription = $request -> categoryDescription;
        $category -> save();

        return redirect('all-categories') -> with('status', 'Data saved successfully.');
    }

    public function editCategory($id) {
        
        $category = Category::find($id);
        return view('admin.categories.edit-category')->with('category', $category);


    }

    public function updateCategory(Request $request, $id) {
        
        $category = Category::find($id);
        $category -> categoryName = $request -> categoryName;
        $category -> categoryDescription = $request -> categoryDescription;
        $category -> update();

        return redirect('all-categories') -> with('status', 'Data updated successfully.');
    }

    public function deleteCategory($id) {
        
        $category = Category::find($id);
        $category -> delete();

        return response() -> json(['status'=>'Poof! Your category has been deleted!']);
    }
}