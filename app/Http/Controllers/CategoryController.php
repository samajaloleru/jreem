<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        $result = Category::all();
        return view('dashboard.category.index', $data, ['categories'=>$result]);
    }

    public function create_category()
    {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        return view('dashboard.category.create',$data);
    }

    public function save_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = new Category;
        $category->name = Str::lower($request->name);
        $category->description = Str::lower($request->description);
        $save = $category->save();

        if ($save) {
            return back()->with('success','Category Created Successfully');
        }else{
            return back()->with('error','Something went wrong, try again later');
        }
        
    }

    public function show_category($id) {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        $result = Category::find($id);
        return view('dashboard.category.edit', $data, ['category'=>$result]);
    }

    public function edit_category(Request $request,$id) {
        $category = Category::find($id);
        // dd($category);
        $category['name'] = Str::lower($request->input('name'));
        $category['description'] = Str::lower($request->input('description'));
        $category->update();
        return view('dashboard.category.index')->with('success','Category Updated successfully !!');
    }

    //this is to deactivate category
    public function deactivate_category($id) {
        $category = Category::find($id);
        $category->status = 0;
        $category->update();
        return back()->with('success', 'Category Deactivate successfully !!');
    }

    //this is to activate category
    public function activate_category($id) {
        $category = Category::find($id);
        $category->status = 1;
        $category->update();
        return back()->with('success', 'Category Activate successfully !!');
    }
}
