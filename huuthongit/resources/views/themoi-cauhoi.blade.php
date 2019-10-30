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
                <h4 class="mb-3 header-title">Thêm mới câu hỏi</h4>
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
                <form action="themmoi" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="NoiDung" aria-describedby="emailHelp" placeholder="Nhập nội dung câu hỏi">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Lĩnh vực</label>
                            <select class="form-control" name="LinhVucID">
                                @foreach ($linhvucs as $lv)
                            <option value="{{$lv->id}}">{{$lv->ten_linh_vuc}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Phương án A</label>
                            <input type="text" class="form-control" id="them_tenlinhvuc" name="A" aria-describedby="emailHelp" placeholder="Nhập đáp án A">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Phương án B</label>
                            <input type="text" class="form-control" id="them_tenlinhvuc" name="B" aria-describedby="emailHelp" placeholder="Nhập đáp án B">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Phương án C</label>
                            <input type="text" class="form-control" id="them_tenlinhvuc" name="C" aria-describedby="emailHelp" placeholder="Nhập đáp án C">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Phương án D</label>
                            <input type="text" class="form-control" id="them_tenlinhvuc" name="D" aria-describedby="emailHelp" placeholder="Nhập đáp án D">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Đáp án</label>
                            <input type="text" class="form-control" id="them_tenlinhvuc" name="DapAn" aria-describedby="emailHelp" placeholder="Nhập đáp án đúng">
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