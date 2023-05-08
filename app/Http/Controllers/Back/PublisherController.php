<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Error;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//MODELs

/*
 * TODO:
 *  eğer yayıncıya ait oyun varsa kontrolünü sağla ve sildirme
 * */

class PublisherController extends Controller
{
    public function index()
    {

        $activePublishers = Publisher::where('isDeleted', '=', 0)->get();

        return view('back.publisher', compact('activePublishers'));
    }

    public function storePublisher(Request $request)
    {
        try {
            $activePublishersCount = Publisher::where('isDeleted', 0)->where('slug', 'LIKE', Str::slug($request->publisherName) . '%')->count();
            if ($activePublishersCount > 0) {
                flash("İşlem gerçekleştirilemedi. Aynı isme sahip başka bir <b>yayıncı</b> var. ")->error();
                return redirect()->back();
            } else {
                $activePublishersCount = Publisher::where('isDeleted', 1)->where('slug', Str::slug($request->publisherName))->count();
                if ($activePublishersCount > 1) {
                    Publisher::create([
                        'name' => $request->publisherName,
                        'slug' => Str::slug($request->publisherName) . rand(0, 999),
                    ]);
                } else {
                    Publisher::create([
                        'name' => $request->publisherName,
                        'slug' => Str::slug($request->publisherName),
                    ]);
                }
            }

            flash('İşlem başarılıyla gerçekleşti.')->success();
            return redirect()->back();
        } catch (\Exception $exception) {
            try {
                Error::create([
                    'message' => substr($exception, 0, 300)
                ]);
            } catch (\Exception $exception) {
                flash('İşlem gerçekleştirilemedi. Acilen sistem yöneticisine bildirin. ')->error();
                return redirect()->back();
            };
            flash('İşlem gerçekleştirilemedi.')->error();
            return redirect()->back();
        }
    }

    public function deletePublisher(Request $request)
    {
        try {
            Publisher::where('id', $request->publisher)->update(['isDeleted' => true]);
            flash('İşlem başarılıyla gerçekleşti.')->success();
            return redirect()->back();
        } catch (\Exception $exception) {
            try {
                Error::create([
                    'message' => substr($exception, 0, 300)
                ]);
            } catch (\Exception $exception) {
                flash('İşlem gerçekleştirilemedi. Acilen sistem yöneticisine bildirin. ')->error();
                return redirect()->back();
            };
            flash('İşlem gerçekleştirilemedi.')->error();
            return redirect()->back();

        }
    }
}
