<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

//MODELs
use App\Http\Controllers\Back\ProductController;
use App\Models\Publisher;
use App\Models\Kind;

class ProductPageController extends Controller
{
    public function pcPageIndex(){

        $pcPublishers = Publisher::where('isDeleted', 0)->where('pcProductCount', '>', 0)->get();
        $kindIds = Product::where('isDeleted', 0)->where('isGiyim', 1)->distinct()->pluck('kindId')->toArray();
        $kinds = Kind::where('isDeleted', 0)->whereIn('id', $kindIds)->get();

        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->where('isGiyim', 1)->orderByDesc('id')->get();

        return view('front.bilgisayar', compact('pcPublishers', 'kinds', 'products'));
    }

    public function psPageIndex(){
        $psPublishers = Publisher::where('isDeleted', 0)->where('psProductCount', '>', 0)->get();
        $kindIds = Product::where('isDeleted', 0)->where('isKamp', 1)->distinct()->pluck('kindId')->toArray();
        $kinds = Kind::where('isDeleted', 0)->whereIn('id', $kindIds)->get();

        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->where('isKamp', 1)->orderByDesc('id')->get();

        return view('front.ps', compact('psPublishers', 'kinds', 'products'));
    }

    public function xboxPageIndex(){

        $xboxPublishers = Publisher::where('isDeleted', 0)->where('xboxProductCount', '>', 0)->get();
        $kindIds = Product::where('isDeleted', 0)->where('isTrek', 1)->distinct()->pluck('kindId')->toArray();
        $kinds = Kind::where('isDeleted', 0)->whereIn('id', $kindIds)->get();

        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->where('isTrek', 1)->orderByDesc('id')->get();

        return view('front.xbox', compact('xboxPublishers', 'kinds', 'products'));
    }

    public function details()
    {
        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->orderByDesc('id')->get();
        return view('front.gta', compact('products'));
    }

    public function xboxDetails($id)
    {
        $product = Product::find($id);

        $pro = Product::where('isDeleted', 0)->where('stock', '>', 0)->orderByDesc('id')->paginate(4);

        return view('front.productDetail', compact('product','pro'));
    }
}
