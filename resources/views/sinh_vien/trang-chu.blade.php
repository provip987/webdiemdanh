@extends('trang-chu')
@section('trangchu')
<div class="sidebar-content">
    <ul class="nav nav-secondary">
        <li class="nav-item active">
            <div class="collapse" id="dashboard">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="../demo1/index.html">
                            <span class="sub-item">Dashboard 1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#sidebarLayouts">
                <i class="fas fa-th-list"></i>
                <p>Sinh Viên</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="sidebarLayouts">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="">
                            <span class="sub-item">Danh sách sinh viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sinh_vien.them') }}">
                            <span class="sub-item">Thêm mới</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#forms">
                <i class="fas fa-pen-square"></i>
                <p>Forms</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="forms/forms.html">
                            <span class="sub-item">Basic Form</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#tables">
                <i class="fas fa-table"></i>
                <p>Tables</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="tables/tables.html">
                            <span class="sub-item">Basic Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables/datatables.html">
                            <span class="sub-item">Datatables</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#giaovien">
                <i class="fas fa-table"></i>
                <p>Trong</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="giaovien">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="giao-vien/trang-chu">
                            <span class="sub-item">Trang Chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="maps/jsvectormap.html">
                            <span class="sub-item">Jsvectormap</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#trolykhoa">
                <i class="fas fa-table"></i>
                <p>Trong</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="trolykhoa">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="tro-ly-khoa/trang-chu">
                            <span class="sub-item">Trang Chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="maps/jsvectormap.html">
                            <span class="sub-item">Jsvectormap</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="widgets.html">
                <i class="fas fa-desktop"></i>
                <p>Widgets</p>
                <span class="badge badge-success">4</span>
            </a>
        </li>
    </ul>
</div>
@endsection