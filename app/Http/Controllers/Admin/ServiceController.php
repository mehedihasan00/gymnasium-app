<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Image;

class ServiceController extends Controller
{
    public function service() {
        $services = Service::latest()->get();
        return view('pages.admin.service.index', compact('services'));
    }
    public function serviceInsert(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:12',
            'icon'
        ]);

        try {
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(724,480)->save('uploads/service/'.$name_gen);
            $save_url = 'uploads/service/'.$name_gen;

            
            $service = new Service;
            $service->name = $request->name;
            $service->description = $request->description;
            $service->s_description = $request->s_description;
            $service->image = $save_url;    
            $service->created_at = Carbon::now();
            $service->save();
            return redirect()->back()->with('success', 'Service inserted!');
        } catch (\Exception $e) {
		    return ["error" => $e->getMessage()];
            // return redirect()->back()->with('error', 'Service insert failed!');
        }
    }
    public function serviceEdit(Request $request, $id) {
        $service = Service::find($id);
        return view('pages.admin.service.edit', compact('service'));
    }
    public function serviceUpdate(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:12',
            's_description' => 'required|min:8',
        ]);

        try {
            // DB::beginTransaction();
            $service = Service::find($id);
            $service->name = $request->name;
            $service->description = $request->description;
            $service->s_description = $request->s_description;

            $image = $request->file('image');
            if($image) {
                $imageName = date('YmdHi').$image->getClientOriginalName();
                Image::make($image)->resize(720,480)->save('uploads/service/' . $imageName);
                $save_url = 'uploads/service/'.$imageName;
                if(file_exists($service->image) && !empty($service->image)) {
                    unlink($service->image);
                }
                $service['image'] = $save_url;
            }           
            $service->save();
            // DB::commit();
            return redirect()->back()->with('success', 'Service Updated!');
        } catch (\Exception $e) {
            // DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('error', 'Service update failed!');
        }
    }
    public function serviceDelete($id) {
        $service = service::find($id);
        if(file_exists($service->image) && !empty($service->image)) {
            unlink($service->image);
        }
        $service->delete();
        return Redirect()->back()->with("success", "Service Deleted Successfully");
    }
}