<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 測試回傳文字
        return 'HomeController index 成功連線！';
    }
}


