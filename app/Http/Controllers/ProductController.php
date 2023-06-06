<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
    [
        "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
        "category" => "Cellphone",
        "name" => "Apple Iphone 11 64GB Black",
        "price" => 5000000,
        "sale_price" => 4500000,
        "brands" => "Apple",
        "rating" => 4
    ],
    [
        "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
        "category" => "Cellphone",
        "name" => "Apple Iphone 11 64GB Black",
        "price" => 5000000,
        "sale_price" => 4500000,
        "brands" => "Apple",
        "rating" => 4
    ],
    [
        "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
        "category" => "Cellphone",
        "name" => "Apple Iphone 11 64GB Black",
        "price" => 5000000,
        "sale_price" => 4500000,
        "brands" => "Apple",
        "rating" => 4
    ],
    [
        "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
        "category" => "Cellphone",
        "name" => "Apple Iphone 11 64GB Black",
        "price" => 5000000,
        "sale_price" => 4500000,
        "brands" => "Apple",
        "rating" => 4
    ],
    [
        "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
        "category" => "Cellphone",
        "name" => "Apple Iphone 11 64GB Black",
        "price" => 5000000,
        "sale_price" => 4500000,
        "brands" => "Apple",
        "rating" => 4
    ]
];

        return view('product.index', ['data' => $products]);
    }
}
