<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $brands;
    protected $brand;

    public function index()
    {
        return view('theme.dashboard.home');
    }
    public function addBrand()
    {
        return view('theme.dashboard.home');
    }
    public function createBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect()->back()->with('message', 'Brand Created Successfully');
    }
    public function manageBrand()
    {
        $this->brands = Brand::all();
        return view('theme.dashboard.manage', ['brands' => $this->brands]);
    }
    public function editBrand($id)
    {
        $this->brand = Brand::find($id);
        return view('theme.dashboard.edit', ['brand'=>$this->brand]);
    }
    public function updateBrand(Request $request){
        Brand::updateBrand($request);
        return redirect('manage-brand')->with('message', 'Brand Updated Successfully');
    }
    public function deleteBrand($id){
        $this->brand = Brand::find($id);
        if (file_exists($this->brand->image)){
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return redirect()->back()->with('message', 'Brand Deleted Successfully');
    }
}
