<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // $this->UserAuthCheck();
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        $posts = Blog::all();
        return view('dashboard.blog.index', $data, ['posts'=>$posts]);
    }

    public function create_blog()
    {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        return view('dashboard.blog.create',$data);
    }

    // public function save_blog(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'body' => 'required|string',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $input = $request->all();

    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'upload/blogs/images/';
    //         $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $blogImage);
    //         $input['image'] = "$blogImage";
    //     }

    //     $save = Blog::create($input);
        
    //     if ($save) {
    //         return back()->with('success','Blog Created Succesfully');
    //     }else{
    //         return back()->with('error','Something went wrong, try again later');
    //     }
    // }

    public function save_blog(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'body' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = new Blog;
        $blog->name = $request->name;
        $blog->body = $request->body;
        $blog->description = $request->description;
        if($image = $request->file('image')){
            $destinationPath = 'upload/blogs/';
            $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $blogImage);
            $blog['image'] = "$blogImage";
        }
        // dd($blog);
        
        $save = $blog->save();

        if ($save) {
            return back()->with('success','Blog Created Succesfully');
        }else{
            return back()->with('error','Something went wrong, try again later');
        }
        
    }

    public function show_blog($id) {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        $result = Blog::find($id);
        return view('dashboard.blog.edit', $data, ['blog'=>$result]);
    }

    public function edit_blog(Request $request,$id) {
        $blog = Blog::find($id);
        // dd($blog);
        $blog['name'] = $request->input('name');
        $blog['body'] = $request->input('body');
        $blog['description'] = $request->input('description');

        if($image = $request->file('image')){
            $destinationPath = 'upload/blogs/';
            $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $blogImage);
            $blog['image'] = "$blogImage";
        }else {
            unset($blog['image']);
        }
        $blog->update();
        return view('dashboard.blog.index')->with('success','Blog Updated successfully !!');
    }

    //this is to deactivate blog
    public function deactivate_blog($id) {
        $blog = Blog::find($id);
        $blog->status = 0;
        $blog->update();
        return back()->with('success', 'Blog Deactivate successfully !!');
    }

    //this is to activate blog
    public function activate_blog($id) {
        $blog = Blog::find($id);
        $blog->status = 1;
        $blog->update();
        return back()->with('success', 'Blog Activate successfully !!');
    }
}
