<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\Slider;
use App\Models\Error;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index(){
        $sliderImages = Slider::all();
        return view('back.slider.index', compact('sliderImages'));
    }

    public function updateSliderIndex($id){
        $sliderImage = Slider::findOrFail($id);
        return view('back.slider.updateSlider', compact('sliderImage'));
    }

    public function updateSlider(Request $request){

        $request->validate([
            'sliderNewImage' => 'image|mimes:jpeg,jpg,png|max:10000'
        ]);

        $sliderImage = Slider::findOrFail($request->sliderImageId);

        try {
            if($request->hasFile('sliderNewImage')){
                $fileName=Str::slug($request->sliderMainText).'_'.date_timestamp_get(date_create()).'.'.$request->sliderNewImage->extension();
                $fileNameWithUpload='front/images/uploads/'.$fileName;
                $request->sliderNewImage->move(public_path('front/images/uploads/'), $fileName);
                $sliderImage->photoPath = $fileNameWithUpload;
            }
            else $sliderImage->photoPath = $request->oldImageValue;
            $sliderImage->sliderMainText = $request->sliderMainText;
            $sliderImage->sliderSubText = $request->sliderSubText;
            $sliderImage->sliderButtonLink = $request->sliderButtonLink;
            $sliderImage->sliderButtonText = $request->sliderButtonText;
            $sliderImage->save();

            flash('İşlem başarılı bir şekilde gerçekleşti')->success();
            return redirect()->route('back.slider.index');
        }catch (\Exception $exception){
            try {
                Error::create(['message' => substr($exception, 0, 300)]);
            }catch (\Exception $exception2){
                flash("İşlem gerçekleştirilemedi. <b>Acilen</b> sistem yöneticisine başvurun.")->error();
                return redirect()->route('back.slider.index');
            }
            flash('İşlem gerçekleştirilemedi.')->error();
            return redirect()->route('back.slider.index');
        }

    }
}
