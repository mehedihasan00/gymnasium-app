<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;


class CompanyProfileController extends Controller
{
    // Edit
    public function edit()
    {
        $company = CompanyProfile::first();
        return view('pages.admin.company.content', compact('company'));
    }

    // Company profile Update 
    public function update(Request $request, CompanyProfile $company)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|string',
            'logo' => 'mimes:jpg,jpeg,png,bmp',
            'about_image' => 'mimes:jpg,jpeg,png,bmp',
            'bg_image' => 'mimes:jpg,jpeg,png,bmp',
            'fr_image1' => 'mimes:jpg,jpeg,png,bmp',
            'fr_image2' => 'mimes:jpg,jpeg,png,bmp',
            'fr_image3' => 'mimes:jpg,jpeg,png,bmp',
        ]);

        // Image Update 
        $companyLogo = $company->logo;
        $AboutImage = $company->about_image;
        $BgImage = $company->bg_image;
        $FrImage1 = $company->fr_image1;
        $FrImage2 = $company->fr_image2;
        $FrImage3 = $company->fr_image3;

        if($request->hasFile('logo')) {
            if(!empty($company->logo) && file_exists($company->logo))
            {
                unlink($company->logo);
            }
            $companyLogo = $this->imageUpload($request, 'logo', 'uploads/about');
        }

        if($request->hasFile('about_image')) {
            if(!empty($company->about_image) && file_exists($company->about_image))
            {
                unlink($company->about_image);
            }
            $AboutImage = $this->imageUpload($request, 'about_image', 'uploads/about');
        }

        if($request->hasFile('bg_image')) {
            if(!empty($company->bg_image) && file_exists($company->bg_image))
            {
                unlink($company->bg_image);
            }
            $BgImage = $this->imageUpload($request, 'bg_image', 'uploads/about');
        }
        if($request->hasFile('fr_image1')) {
            if(!empty($company->fr_image1) && file_exists($company->fr_image1))
            {
                unlink($company->fr_image1);
            }
            $FrImage1 = $this->imageUpload($request, 'fr_image1', 'uploads/about');
        }
        if($request->hasFile('fr_image2')) {
            if(!empty($company->fr_image2) && file_exists($company->fr_image2))
            {
                unlink($company->fr_image2);
            }
            $FrImage2 = $this->imageUpload($request, 'fr_image2', 'uploads/about');
        }
        if($request->hasFile('fr_image3')) {
            if(!empty($company->fr_image3) && file_exists($company->fr_image3))
            {
                unlink($company->fr_image3);
            }
            $FrImage3 = $this->imageUpload($request, 'fr_image3', 'uploads/about');
        }


        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $company->about = $request->about;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $company->twitter = $request->twitter;
        $company->linkedin = $request->linkedin;
        $company->fr_title1 = $request->fr_title1;
        $company->fr_title2 = $request->fr_title2;
        $company->fr_title3 = $request->fr_title3;
        $company->logo = $companyLogo;
        $company->about_image = $AboutImage;
        $company->bg_image = $BgImage;
        $company->fr_image1 = $FrImage1;
        $company->fr_image2 = $FrImage2;
        $company->fr_image3 = $FrImage3;
        $company->save();
        if($company){
            return redirect()->back()->with('Update Successfull!');
        }
        return redirect()->back()->withInput();
    }
}
