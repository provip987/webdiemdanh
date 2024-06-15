<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class SinhVien extends Authenticatable
{
    use HasFactory;

    // Tên bảng
    protected $table = 'sinh_vien';

    // Khóa chính
    protected $primaryKey = 'ma_sinh_vien';

    // Khóa chính không tự tăng
    public $incrementing = false;

    // Kiểu dữ liệu của khóa chính là chuỗi

    protected $keyType = 'string';
    protected $dates = ['deleted_at'];
}