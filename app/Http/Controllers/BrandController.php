<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index($brand)
    {
        $brands = [
            '1' => 'Huế',
            '2' => 'Đà Nẵng',
            '3' => 'Hà Nội'
        ];

        if (!array_key_exists($brand, $brands)) {
            abort(404, 'Chi Nhánh này không tồn tại');
        }

        return view('brand', [
            'brand' => $brands[$brand]
        ]);
    }
}
