<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//MODELs
use App\Models\Kind;
use App\Models\Product;
use App\Models\Publisher;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(25);

        return view('back.product.index', compact('products'));
    }

    public function storeProductIndex()
    {

        $publishers = Publisher::where('isDeleted', 0)->get();
        $kinds = Kind::where('isDeleted', 0)->get();

        return view('back.product.store', compact('publishers', 'kinds'));
    }

    public function storeProduct(Request $request)
    {

        $request->validate([
            'gameName' => 'required',
            'publisher' => 'required',
            'kind' => 'required',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'discountRate' => 'integer|min:0',
            'description' => 'required',
            'systemRequirementsText' => 'required',
            'coverImage' => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,jpg,png|max:10000',
        ]);

        if (!$request->isGiyim && !$request->isKamp && !$request->isTrek) {
            error_log('platform yok');
            flash('Lütfen en az bir <b>platform</b> seçiniz.')->error();
            return redirect()->back()->withInput();
        }

        $isGiyim = false;
        $isKamp = false;
        $isTrek = false;
        $photoPaths = [];

        if ($request->isGiyim) {
            $isGiyim = true;

            $publisherPcGameCount = Publisher::where('isDeleted', 0)->where('id', $request->publisher)->sum('pcProductCount');
            Publisher::where('isDeleted', 0)->where('id', $request->publisher)->update([
                'pcProductCount' => $publisherPcGameCount + 1
            ]);
        }
        if ($request->isKamp) {
            $isKamp = true;

            $publisherPsGameCount = Publisher::where('isDeleted', 0)->where('id', $request->publisher)->sum('psProductCount');
            Publisher::where('isDeleted', 0)->where('id', $request->publisher)->update([
                'psProductCount' => $publisherPsGameCount + 1
            ]);
        }
        if ($request->isTrek) {
            $isTrek = true;

            $publisherXboxGameCount = Publisher::where('isDeleted', 0)->where('id', $request->publisher)->sum('xboxProductCount');
            Publisher::where('isDeleted', 0)->where('id', $request->publisher)->update([
                'xboxProductCount' => $publisherXboxGameCount + 1
            ]);
        }

        $product = new Product();

        if ($request->hasFile('images')) {
            foreach ($request->images as  $file) {
                $fileName = Str::slug($request->gameName) . '_' . rand(0, 999) . '_' . date_timestamp_get(date_create()) . '.' . $file->extension();
                $fileNameWithUpload = 'front/images/uploads/productsImages/' . $fileName;
                $file->move(public_path('front/images/uploads/productsImages/'), $fileName);

                $photoPaths[] = $fileNameWithUpload;
            }
        }

        if($request->hasFile('coverImage')){
            $coverFileName = Str::slug($request->gameName) . '_cover_' . date_timestamp_get(date_create()) . '.' . $request->file('coverImage')->extension();
            $coverFileNameWithUpload = 'front/images/uploads/productsImages/' . $coverFileName;
            $request->file('coverImage')->move(public_path('front/images/uploads/productsImages/'), $coverFileName);
            $product->coverImage = $coverFileNameWithUpload;
        }

        $product->name = $request->gameName;
        $product->kindId = $request->kind;
        $product->publisherId = $request->publisher;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discountRate = $request->discount;
        $product->isGiyim = $isGiyim;
        $product->isKamp = $isKamp;
        $product->isTrek = $isTrek;
        $product->descriptionHead = $request->descriptionHead;
        $product->description = $request->description;
        $product->systemRequirementsText = $request->systemRequirementsText;
        $product->imagesPaths = json_encode($photoPaths);

        $product->save();

        flash('Ürün başarılı bir şekilde eklendi.')->success();

        return redirect()->route('back.products.index');
    }

    public function storeProductEdit($id){

        $publishers = Publisher::where('isDeleted', 0)->get();
        $kinds = Kind::where('isDeleted', 0)->get();
        $productUpdate = Product::findOrFail($id);

        return view('back.product.storeProductUpdate', compact('productUpdate','publishers', 'kinds'));
    }

    public function storeProductUpdate(Request $request)
    {
        $request->validate([
            'gameName' => 'required',
            'publisher' => 'required',
            'kind' => 'required',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'discountRate' => 'integer|min:0',
            'description' => 'required',
            'systemRequirementsText' => 'required',
            'coverImage' => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,jpg,png|max:10000',
        ]);

        if (!$request->isGiyim && !$request->isKamp && !$request->isTrek) {
            error_log('platform yok');
            flash('Lütfen en az bir <b>platform</b> seçiniz.')->error();
            return redirect()->back()->withInput();
        }

        $isGiyim = false;
        $isKamp = false;
        $isTrek = false;
        $photoPaths = [];

        if ($request->isGiyim) {
            $isGiyim = true;

            $publisherPcGameCount = Publisher::where('isDeleted', 0)->where('id', $request->publisher)->sum('pcProductCount');
            Publisher::where('isDeleted', 0)->where('id', $request->publisher)->update([
                'pcProductCount' => $publisherPcGameCount + 1
            ]);
        }
        if ($request->isKamp) {
            $isKamp = true;

            $publisherPsGameCount = Publisher::where('isDeleted', 0)->where('id', $request->publisher)->sum('psProductCount');
            Publisher::where('isDeleted', 0)->where('id', $request->publisher)->update([
                'psProductCount' => $publisherPsGameCount + 1
            ]);
        }
        if ($request->isTrek) {
            $isTrek = true;

            $publisherXboxGameCount = Publisher::where('isDeleted', 0)->where('id', $request->publisher)->sum('xboxProductCount');
            Publisher::where('isDeleted', 0)->where('id', $request->publisher)->update([
                'xboxProductCount' => $publisherXboxGameCount + 1
            ]);
        }

        $product = Product::findOrFail($request->productId);

        if ($request->hasFile('images')) {
            foreach ($request->images as  $file) {
                $fileName = Str::slug($request->gameName) . '_' . rand(0, 999) . '_' . date_timestamp_get(date_create()) . '.' . $file->extension();
                $fileNameWithUpload = 'front/images/uploads/productsImages/' . $fileName;
                $file->move(public_path('front/images/uploads/productsImages/'), $fileName);

                $photoPaths[] = $fileNameWithUpload;
            }
        }

        if($request->hasFile('coverImage')){
            $coverFileName = Str::slug($request->gameName) . '_cover_' . date_timestamp_get(date_create()) . '.' . $request->file('coverImage')->extension();
            $coverFileNameWithUpload = 'front/images/uploads/productsImages/' . $coverFileName;
            $request->file('coverImage')->move(public_path('front/images/uploads/productsImages/'), $coverFileName);
            $product->coverImage = $coverFileNameWithUpload;
        }

        $product->name = $request->gameName;
        $product->kindId = $request->kind;
        $product->publisherId = $request->publisher;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discountRate = $request->discount;
        $product->isGiyim = $isGiyim;
        $product->isKamp = $isKamp;
        $product->isTrek = $isTrek;
        $product->descriptionHead = $request->descriptionHead;
        $product->description = $request->description;
        $product->systemRequirementsText = $request->systemRequirementsText;
        $product->imagesPaths = json_encode($photoPaths);

        $product->save();

        flash('Ürün başarılı bir şekilde güncellendi.')->success();

        return redirect()->route('back.products.index');

    }

    public function productStatus($id,$status)
    {
        try {
            $updateStatus =  Product::whereId($id)->update([
                'isDeleted' => $status
            ]);

            if ($updateStatus) {
                flash('Ürün durumu başarıyla güncellendi.')->success();
                return redirect()->back();
            }

            flash('Hata !')->error();
            return redirect()->back();


        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function productDelete($id){

        $product = Product::findOrFail($id);
        $product->delete();
        flash('Ürün başarıyla silindi.')->success();
        return redirect()->route('back.products.index');
        
    }

    public function productSearch(Request $request){
        
        try {
            
        $pcPublishers = Publisher::where('isDeleted', 0)->get();
        $kinds = Kind::where('isDeleted', 0)->get();
        $products = Product::where('name', 'LIKE', '%'.$request->name.'%')->orderByDesc('id')->paginate();

            if(count($products) > 1){
                return view('front.search', compact('products','pcPublishers', 'kinds'));
            }
            flash('Ürün Bulunamadı !')->error();
            return redirect()->back();
        }
        catch (\Exception $exception){
            flash('İşlem gerçekleştirilirken bir hata oldu. '. $exception->getMessage())->error();
            return redirect()->back();
        }
    }
}
