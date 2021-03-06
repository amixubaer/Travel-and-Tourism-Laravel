<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Packagebook;

class AdminPackageController extends Controller
{
    public function adPackage(){
        $packages = Package::where('req', 'Pending')->get();
        return view('admin.ADPackage')->with('ADPackageList', $packages);
    }

    public function packageList(){
        $packages = Package::where('req', 'Approved')->get();
        return view('admin.packageList')->with('packageList', $packages);
    }

    public function packageApprove($id){
        $package = Package::find($id);
        return view('admin.packageApprove')->with('package', $package);
    }

    public function packageAdd($id){
        $package = Package::find($id);
        $package->req = 'Approved';
        $package->save();

        return redirect()->route('AdminPackage.adPackage');
    }

    public function packageDecline($id){
        $package = Package::find($id);
        return view('admin.packageDecline')->with('package', $package);
    }

    public function packageRemove($id){
        Package::destroy($id);
        return redirect()->route('AdminPackage.adPackage');
    }

    public function packageDelete($id){
        $package = Package::find($id);
        return view('admin.packageDelete')->with('package', $package);
    }

    public function packageDestroy($id){
        Package::destroy($id);
        return redirect()->route('AdminPackage.packageList');
    }


    public function packageBookingList(){
        $packageBooks= Packagebook::all();
        return view('admin.packageBookingList')->with('packageBooks', $packageBooks);
    }



    public function packageStatus(){
        
        $packages = Package:: all();
        return view('admin.packageStatus')->with('packages', $packages);
    }


    public function packageStatusUpdate(Request $req ){
        
        $package = Package::where('place', $req->place)->first();
        $package->status = $req->status;
        $package->save();
        return redirect()->route('AdminPackage.packageList');

    }

}
