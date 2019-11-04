@extends('layout')
@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
<!-- Datatables init -->
{{-- <script>
    $(document).ready(function() {
    $("#cau-hoi-datatable").DataTable({
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        }
    });
});
</script> --}}
@endsection
@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh Sách Câu Hỏi</h4>
                <a href="{{route('themcauhoi')}}" type="button" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
                <a href="{{route('thungraccauhoi')}}" type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Thùng rác</a>
                <br>
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <table id="cau-hoi-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Lĩnh vực ID</th>
                            <th>Phương án A</th>
                            <th>Phương án B</th>
                            <th>Phương án C</th>
                            <th>Phương án D</th>
                            <th>Đáp Án</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cauHoi as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->noi_dung }}</td>
                            <td>
                               {{-- @if($linhvucs->id==$t->linh_vuc_id)
                                {{  $linhvucs->ten_linh_vuc }}
                                @endif --}}
                                {{ $t->LinhVuc->ten_linh_vuc}}
                                
                            </td>
                            <td>{{ $t->phuong_an_a }}</td>
                            <td>{{ $t->phuong_an_b }}</td>
                            <td>{{ $t->phuong_an_c }}</td>
                            <td>{{ $t->phuong_an_d }}</td>
                            <td>{{ $t->dap_an }}</td>
                            <td>
                            <a  onclick="thongbaoxoa({{$t->id}})" class="btn btn-outline-danger waves-effect"><i class="la la-trash-o"></i></a>
                            <a href="cauhoi/sua/{{$t->id}}" class="btn btn-outline-success waves-effect"><i class="la la-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<script>
function thongbaoxoa($id) {
    Swal.fire({
        title: 'Bạn có Muốn Xóa Không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Xóa nó!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Đã Xóa!',
            'Bạn đã xóa thành công.',
            'success'
            )
            $url='cauhoi/xoa/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
    <!-- end row-->
@endsection
