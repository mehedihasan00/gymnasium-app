<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('pages.admin.slider.index', compact('sliders'));
    }
    public function store(Request $request) {
        $request->validate([
            'slogan' => 'required|string|min:3',
            'headerline' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'image' => 'required|mimes:jpg,png,bmp,jpeg',
        ]);
        $slider = new Slider();
        $slider->slogan = $request->slogan;
        $slider->headerline = $request->headerline;
        $slider->description = $request->description;
        $slider->image = $this->imageUpload($request, 'image', 'uploads/slider') ?? '';
        $slider->save();
        if($slider) {
            return redirect()->route('slider.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();       
    }

    // Edit
    public function edit($id)
    {   
        $slider = Slider::find($id);
        return view('pages.admin.slider.edit', compact('slider'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'slogan' => 'required|string|min:3',
            'headerline' => 'required|string|min:3',
            'description' => 'required|string|min:3',
        ]);
        // image upload
        $slider = Slider::find($id);
        $sliderImage = '';
        if ($request->hasFile('image')) {
            if (!empty($slider->image) && file_exists($slider->image)) {
                unlink($slider->image);
            }
            $sliderImage = $this->imageUpload($request, 'image', 'uploads/slider');
        }else{
            $sliderImage = $slider->image;
        }

        $slider->slogan = $request->slogan;
        $slider->headerline = $request->headerline;
        $slider->description = $request->description;
        $slider->image = $sliderImage;
        $slider->save();
        if($slider)
        {
            return redirect()->route('slider.index')->with('success', 'Update Successfull');
        }
        return redirect()->back()->withInput()->with('faild', 'Update Unsuccess');
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        if (!empty($slider->image) && file_exists($slider->image)) {
            unlink($slider->image);
        }
        $slider->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }

}
