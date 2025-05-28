<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class DemoController extends Controller
{
    public function CreateBrand(Request $request) {
        return Brand::create($request->input());
    }

    public function UpdateBrand(Request $request) {
        return Brand::where('id', $request->id)
        ->update($request->input());
    }

    public function UpdateOrCreateBrand(Request $request) {
        return Brand::updateOrCreate(['brandName'=> $request->brandName],
        $request->input());
    }

    public function DeleteBrand(Request $request) {
        return Brand::where('id', '=', $request->id)
        ->delete();
    }
}
