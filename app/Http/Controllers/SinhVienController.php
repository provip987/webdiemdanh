<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
class SinhVienController extends Authenticatable
{
    public function trangChu()
    {
        return View('sinh_vien/trang-chu');
    }
}
