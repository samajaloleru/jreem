<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('pages.cart', compact('cartItems'));
    }


    public function addToCart($id)
    {
        $item = Product::find($id);
        $itemImg = Product::find($id)->productimage()
                ->where('status',1)
                ->first();
        if(!$item) {
            abort(404);
        }
        $basket = session()->get('basket');
        // if basket is empty then this the first item

        if(!$basket) {
            $basket = [
                $id => [
                    "name" => $item->name,
                    "qty" => 1,
                    "price" => $item->price,
                    "img" => $itemImg->path
                    ]
                ];
            session()->put('basket', $basket);
            return redirect()->back()->with('success', 'Item added to basket successfully!');
        }
        // if basket not empty then check if this item exist then increment qty
        if(isset($basket[$id])) {
            $basket[$id]['qty']++;
            session()->put('basket', $basket);
            return redirect()->back()->with('success', 'Item added to basket successfully!');
        }
        // if item not exist in basket then add to basket with qty = 1
        $basket[$id] = [
            "name" => $item->name,
            "qty" => 1,
            "price" => $item->price,
            "img" => $itemImg->path
        ];
        session()->put('basket', $basket);
        return redirect()->back()->with('success', 'Item added to basket successfully!');
    }

    // public function updateCart(Request $request)
    // {
    //     dd($request);
    //     // if($request->id and $request->qty)
    //     // {
    //     //     $basket = session()->get('basket');
    //     //     $basket[$request->id]["qty"] = $request->qty;
    //     //     session()->put('basket', $basket);
    //     //     return back()->with('success', 'Item Cart is Updated Successfully !');
    //     // }
    // } 

    public function updateCartItem(Request $request)
    {
        // dd($request);
        if($request->id and $request->qty)
        {
            $basket = session()->get('basket');
            $basket[$request->id]["qty"] = $request->qty;
            session()->put('basket', $basket);
            return back()->with('success', 'Item Cart is Updated Successfully !');
        }
    }

    public function removeCart(Request $request)
    {
        if($request->id) {
            $basket = session()->get('basket');
            if(isset($basket[$request->id])) {
                unset($basket[$request->id]);
                session()->put('basket', $basket);
            }
            return back()->with('success', 'Item Cart Remove Successfully !');
        }
    }

    public function clearAllCart()
    {
        // \Cart::clear();
        return redirect()->route('cart.list')->with('success', 'All Item Cart Clear Successfully !');
    }
}
