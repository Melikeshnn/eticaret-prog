<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Error;
use Illuminate\Http\Request;

//MODELs
use App\Models\Kind;
use Illuminate\Support\Str;

class KindController extends Controller
{
    public function index(){

        $activeKinds =Kind::where('isDeleted', 0)->get();
        return view('back.kind', compact('activeKinds'));
    }

    public function storeKind(Request $request){
        try {
            $activeKindsCount = Kind::where('isDeleted', 0)->where('slug', 'LIKE' , Str::slug($request->kindName).'%')->count();
            if ($activeKindsCount > 0) {
                flash("İşlem gerçekleştirilemedi. Aynı isme sahip başka bir <b>tür</b> var. ")->error();
                return redirect()->back();
            } else {
                $activeKindsCount = Kind::where('isDeleted',  1)->where('slug',  Str::slug($request->kindName))->count();
                if ($activeKindsCount > 0 ) {
                    Kind::create([
                        'name' => $request->kindName,
                        'slug' => Str::slug($request->kindName) . rand(0, 999),
                    ]);
                }
                else{
                    Kind::create([
                        'name' => $request->kindName,
                        'slug' => Str::slug($request->kindName),
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

    public function deleteKind(Request $request)
    {
        try {
            Kind::where('id', $request->kind)->update(['isDeleted' => true]);
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
