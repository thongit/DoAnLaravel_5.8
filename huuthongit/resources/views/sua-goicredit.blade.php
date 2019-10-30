@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới gói credit</h4>
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
                <form action="{{$goiCredits->id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Gói</label>
                        <input type="text" class="form-control" value="{{$goiCredits->ten_goi}}" name="TenGoi" aria-describedby="emailHelp" placeholder="Nhập tên gói credit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label>
                        <input type="text" class="form-control" value="{{$goiCredits->credit}}" name="Credit" aria-describedby="emailHelp" placeholder="Nhập credit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số Tiền</label>
                        <input type="text" class="form-control" value="{{$goiCredits->so_tien}}" name="SoTien" aria-describedby="emailHelp" placeholder="Nhập số tiền">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
    <!-- end row --> 
@endsection