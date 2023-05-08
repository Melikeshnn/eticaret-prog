<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;


class OrderController extends Controller
{
    public function newOrder(Request $request)
    {
        $newOrder = Orders::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'cardName' => $request['name'],
            'cardNumber' => $request['cardnumber'],
            'cardDate' => $request['carddate'],
            'cardCvv' => $request['cardcvv'],
            'total' => $request['total'],
        ]);

        $newOrder->save();

        $carts = Cart::where('user_id', auth()->user()->id)->get();
        Cart::destroy($carts);

        return redirect()->route('front.order.index');
    }

    public function home(Request $request)
    {
        $orders = Orders::all();
        $users = User::all();
        $products = Product::all();

        $approved = Orders::where('isDeleted', 0)->get();
        $denied = Orders::where('isDeleted', 1)->get();

        return view('back.dashboard', compact('orders', 'users', 'products', 'approved', 'denied'));
    }

    public function orderIndex(Request $request)
    {
        $orders = Orders::where('user_id', auth()->user()->id)->get();
        $products = Product::all();

        return view('front.orderIndex', compact('orders', 'products'));
    }

    public function orderStatus($id,$status)
    {
        try {
            $updateStatus =  Orders::whereId($id)->update([
                'isDeleted' => $status
            ]);

            if ($updateStatus) {
                flash('Sipariş durumu başarıyla güncellendi.')->success();
                return redirect()->back();
            }

            flash('Hata !')->error();
            return redirect()->back();


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
