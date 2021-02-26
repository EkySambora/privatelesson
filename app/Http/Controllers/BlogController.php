<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data = [
            'id' => 1,
            'data' => 'lorem ipsum dolor sit amet'
        ];
        return [ 'status' => 200, 'data' => $data];
    }
}
