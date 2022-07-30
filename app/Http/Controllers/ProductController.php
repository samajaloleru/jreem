<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productcolor;
use App\Models\Productsize;
use App\Models\Productimage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        $result = Product::all();
        return view('dashboard.product.index', $data, ['products'=>$result]);
    }

    public function create_product()
    {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        return view('dashboard.product.create',$data);
    }

    public function save_product(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'category_id' => 'required',
            'color' => 'required',
            'sales_status' => 'required',
            'availability_quantity' => 'required',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'availability_quantity' => 'required',
        ]);
        
        $product = new Product;
        $product->name = Str::lower($request->name);
        $product->price = $request->price;
        $product->availability_quantity = $request->availability_quantity;
        $product->sales_status = $request->sales_status;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->short_description = Str::lower($request->short_description);
        $product->description = Str::lower($request->description);
        $save = $product->save();

        if ($save) {
            $productColors = explode(",", $request->color);
            $productSizes = explode(",", $request->size);
            foreach ($productColors as $value) {
                Productcolor::create([
                    'product_id' => $product->id,
                    'name' => trim($value),
                    'hex_code' => color_name_to_hex(trim($value))
                ]);
            }
            if ($request->hasfile('images')) {
                $productImages = $request->file('images');
                
                foreach($productImages as $image) {
                    $name = $image->getClientOriginalName();
                    $path = $image->storeAs('upload/products', $name, 'public');
                    Productimage::create([
                        'product_id' => $product->id,
                        'name' => $name,
                        'path' => '/storage/'.$path
                    ]);
                }
            }
            foreach ($productSizes as $value) {
                // dd([
                //     'product_id' => $product->id,
                //     'name' => trim($value),
                // ]);
                Productsize::create([
                    'product_id' => $product->id,
                    'name' => trim($value),
                ]);
            }
            return back()->with('success','Product Created Successfully');
        }else{
            return back()->with('error','Something went wrong, try again later');
        }
        
    }

    public function show_product($id) {
        $data = ['LoggedUserInfo' =>User::where('id', session('LoggedUser'))->first()];
        $result = Product::find($id);
        $colorresult = Product::find($id)->productcolor;
        $sizeresult = Product::find($id)->productsize;
        $imageresult = Product::find($id)->productimage;
        
        // dd($result);
        return view('dashboard.product.edit', $data, ['product'=>$result, 'colors'=>$colorresult, 'sizes'=>$sizeresult, 'images'=>$imageresult]);
    }

    public function edit_product(Request $request,$id) {
        $product = Product::find($id);
        // dd($product);
        $product['name'] = $request->input('name');
        $product['price'] = $request->input('price');
        $product['status'] = $request->input('status');
        $product['category_id'] = $request->input('category_id');
        $product['short_description'] = $request->input('short_description');
        $product['description'] = $request->input('description');
        $product->update();
        return $this->index()->with('success','Product Updated successfully !!');
    }

    //this is to deactivate product
    public function deactivate_product($id) {
        $product = Product::find($id);
        $product->status = 0;
        $product->update();
        return back()->with('success', 'Product Deactivated successfully !!');
    }

    //this is to activate product
    public function activate_product($id) {
        $product = Product::find($id);
        $product->status = 1;
        $product->update();
        return back()->with('success', 'Product Activated successfully !!');
    }
    
    //this is to deactivate product color
    public function deactivate_product_color($id) {
        $color = Productcolor::find($id);
        $color->status = 0;
        $color->update();
        return back()->with('success', 'Color Deactivated successfully !!');
    }

    //this is to activate product color
    public function activate_product_color($id) {
        $color = Productcolor::find($id);
        $color->status = 1;
        $color->update();
        return back()->with('success', 'Color Activated successfully !!');
    }

    //this is to deactivate product size
    public function deactivate_product_size($id) {
        $size = Productsize::find($id);
        $size->status = 0;
        $size->update();
        return back()->with('success', 'Size Deactivated successfully !!');
    }

    //this is to activate product size
    public function activate_product_size($id) {
        $size = Productsize::find($id);
        $size->status = 1;
        $size->update();
        return back()->with('success', 'Size Activated successfully !!');
    }
    
    //this is to deactivate product image
    public function deactivate_product_image($id) {
        $image = Productimage::find($id);
        $image->status = 0;
        $image->update();
        return back()->with('success', 'Image Deactivated successfully !!');
    }

    //this is to activate product image
    public function activate_product_image($id) {
        $image = Productimage::find($id);
        $image->status = 1;
        $image->update();
        return back()->with('success', 'Image Activated successfully !!');
    }
}
