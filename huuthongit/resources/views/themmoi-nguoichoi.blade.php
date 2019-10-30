@extends('layout')
@section('main-content')
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới người chơi</h4>
                {{-- @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif --}}
                <form action="themmoi" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="TenDangNhap" aria-describedby="emailHelp" placeholder="Nhập tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="MatKhau" aria-describedby="emailHelp" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="NhapLaiMatKhau" aria-describedby="emailHelp" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="Email" aria-describedby="emailHelp" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình đại diện</label>
                        <input type="file" class="form-control"  name="HinhDaiDien" aria-describedby="emailHelp" placeholder="Hình đại diện">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Điểm cao nhất</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="DiemCaoNhat" aria-describedby="emailHelp" placeholder="Điểm cao nhất">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="Credit" aria-describedby="emailHelp" placeholder="Credit">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
    <!-- end row --> 
    @if(count($errors)>0)
    <script>
                Swal.fire({
                position: 'top-end',
                type: 'error',
                title: 'Bạn không thể thêm',
                showConfirmButton: false,
                timer: 1500
                }) 
    </script>
    @endif
    @if(session('thongbao'))
    <script>
                Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Bạn thêm thành công',
                showConfirmButton: false,
                timer: 1500
                })
    </script>
    @endif 
@endsection