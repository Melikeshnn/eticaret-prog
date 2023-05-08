<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

class CartController extends Controller
{
    public function cart(){

        $carts = Cart::all();
        $users = User::all();
        $products = Product::all();

        return view('front.cart', compact('carts', 'users', 'products'));
    }

   public function addCart(Request $request)
   {
       if (auth()->user()->id ?? '?') {

        $newOrder = Cart::create([
            'user_id' => auth()->user()->id ?? '?',
            'product_id' => $request->product_id,
            'stock' => 1,
        ]);

        $newOrder->save();
        return redirect()->back();
       }

       return redirect('front.mainpage');

   }

   public static function removeCart($id)
   {
        Cart::destroy($id);
        return redirect()->back();
   }

   public static function cartItem()
   {
        $userId = auth()->user()->id ?? '?';
        return Cart::where('user_id',$userId)->count();
   }


}
