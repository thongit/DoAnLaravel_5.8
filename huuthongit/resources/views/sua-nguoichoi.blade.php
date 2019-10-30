@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới người chơi</h4>
                @if (count($errors) > 0)
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
                @endif
                <form action="themmoi" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="TenDangNhap" aria-describedby="emailHelp" placeholder="Nhập tên gói credit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="MatKhau" aria-describedby="emailHelp" placeholder="Nhập credit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="NhapLaiMatKhau" aria-describedby="emailHelp" placeholder="Nhập số tiền">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="Email" aria-describedby="emailHelp" placeholder="Nhập số tiền">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình đại diện</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="HinhDaiDien" aria-describedby="emailHelp" placeholder="Nhập số tiền">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Điểm cao nhất</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="DiemCaoNhat" aria-describedby="emailHelp" placeholder="Nhập số tiền">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="Credit" aria-describedby="emailHelp" placeholder="Nhập số tiền">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
    <!-- end row --> 
@endsection