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
                <h4 class="mb-3 header-title">Sửa lĩnh vực</h4>
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
            <form action="{{$linhvuc->id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên lĩnh vực</label>
                    <input type="text" class="form-control" id="sua_tenlinhvuc" value="{{$linhvuc->ten_linh_vuc}}" name="Ten" aria-describedby="emailHelp" placeholder="Nhập tên lĩnh vực">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
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
            title: 'Bạn không thể sửa',
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
            title: 'Bạn sửa thành công',
            showConfirmButton: false,
            timer: 1500
            })
</script>
@endif 
@endsection