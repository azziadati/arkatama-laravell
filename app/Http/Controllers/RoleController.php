<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role= [
            [
                "id" => "1",
                "name" => "azziadati"
            ],
            [
                "id" => "2",
                "name" => "maria"
            ],
            [
                "id" => "3",
                "name" => "meri"
            ],
            [
                "id" => "4",
                "name" => "zahra"
            ],
            [
                "id" => "5",
                "name" => "roy"
            ]
        ];
        return view('role.index', ['data' => $role]);
    }
    
}
