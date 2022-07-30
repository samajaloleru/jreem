<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
Session_start();

class PagesController extends Controller
{
    
    public function index() {
        // $product = DB::table('product')
        //        ->where('product.status',1)
        //         ->select('product.*')
        //         ->get(); 

        return view('pages.index');
        // return view('pages.index',['product'=>$product]);
    }

    public function search(Request $request){
      $q = $request->input('q');
      if($q != ""){
         $product = DB::table('product')
                  ->where('product_name', 'LIKE', '%' . $q . '%')
                  ->get();

         if(count($product) > 0)
         return view('pages.shop')->withDetails($product)->withQuery($q);
      }
      //dd($q);
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();

      return view('pages.shop')->withMessage("No Product Found!");
   }

   public function about(){
    // $product = DB::table('product')
    //             ->where('product.status',1)
    //             ->inRandomOrder()
    //             ->limit('30')
    //             ->select('product.*')
    //             ->get(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
    return view('pages.about');
    // return view('pages.shop',['product'=>$product]);
   }
   
   public function shop(){
    // $product = DB::table('product')
    //             ->where('product.status',1)
    //             ->inRandomOrder()
    //             ->limit('30')
    //             ->select('product.*')
    //             ->get(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
    return view('pages.shop');
    // return view('pages.shop',['product'=>$product]);
   }


   public function product_by_category($category_id)
   {
        $category = Category::find($category_id);
        $result = Category::find($category_id)->products()
                ->where('status',1)
                ->get();
      return view('pages.product_by_category', ['category'=> $category],['products'=>$result]);
   }


   public function view_product($id){
       $result = Product::find($id);
       $imageresult = Product::find($id)->productimage()
                ->where('status',1)
                ->get();
       $colorresult = Product::find($id)->productcolor()
                ->where('status',1)
                ->get();
      return view('pages.view_product',['product'=> $result], ['active_images'=>$imageresult, 'active_colors'=>$colorresult]);
   }
   
   public function fetch_blog($id){
       $result = Blog::find($id);
//    public function view_product($product_id){
    //   $product = DB::table('product')
    //            ->where('product.product_id',$product_id)
    //            ->where('product.status',1)
    //            ->first(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
      return view('pages.fetch_blog',['blog'=> $result]);
   }

    public function blog() {
        $result = Blog::orderBy('name')
                    ->where('status',1)
                    ->get();
        return view('pages.blog', ['blogs'=>$result]);
    }

    public function service() {
        return view('pages.service');
    }

    public function contact() {
        return view('pages.contact');
    }    
    
}
