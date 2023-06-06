<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category= [
            [
                "id" => "1",
                "name" => "cellphone"
            ],
            [
                "id" => "2",
                "name" => "cellphone"
            ],
            [
                "id" => "3",
                "name" => "cellphone"
            ],
            [
                "id" => "4",
                "name" => "cellphone"
            ],
            [
                "id" => "5",
                "name" => "cellphone"
            ]
        ];
        return view('category.index', ['data' => $category]);
    }
}
