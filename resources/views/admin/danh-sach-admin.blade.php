@extends('sinh_vien.trang-chu')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row"> 
                <div class="col-sm-10">
                    <h1 class="card-title">Danh Sách Admin</h1>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('sinh_vien.them') }}">
                        <button class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i> THÊM
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                         
                            
                            <th>HỌ TÊN</th>
                            <th>NGÀY SINH</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>CCCD</th>
                            <th>EMAIL</th>
                            <th>MẬT KHẨU</th>
                            <th>ĐỊA CHỈ</th>
                            <th style="width: 10%">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhviens as $sinhvien)
                            <tr>
                             
                                <td>{{ $sinhvien->ma_sinh_vien }}</td>
                                <td>{{ $sinhvien->ho_ten }}</td>
                                <td>{{ $sinhvien->ngay_sinh }}</td>
                                <td>{{ $sinhvien->so_dien_thoai }}</td>
                                <td>{{ $sinhvien->so_cccd }}</td>
                                <td>{{ $sinhvien->email }}</td>
                                <td>{{ $sinhvien->mat_khau }}</td>
                                <td>{{ $sinhvien->dia_chi }}</td>
                                <td>
                                    <div class="form-button-action">
                                        <a href="{{ route('sinh_vien.cap_nhat', $sinhvien->ma_sinh_vien) }}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-right">
            {{ $sinhviens->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
