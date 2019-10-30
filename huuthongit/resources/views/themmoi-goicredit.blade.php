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
                <h4 class="mb-3 header-title">Thêm mới gói credit</h4>
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
                        <label for="exampleInputEmail1">Tên Gói</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="TenGoi" aria-describedby="emailHelp" placeholder="Nhập tên gói credit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="Credit" aria-describedby="emailHelp" placeholder="Nhập credit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số Tiền</label>
                        <input type="text" class="form-control" id="them_tenlinhvuc" name="SoTien" aria-describedby="emailHelp" placeholder="Nhập số tiền">
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