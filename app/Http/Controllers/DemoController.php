<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class DemoController extends Controller
{
    public function DemoAction(Request $request) {
        return Brand::create($request->input());
    }
}
