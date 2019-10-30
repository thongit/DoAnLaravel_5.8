function thongbaoxoa() {
    Swal.fire({
        title: 'Bạn có muốn xóa không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, archive it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result) {
            swal("Deleted!", "Your imaginary file has been archived.", "success");
            return true;
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
            return false;
        }
    })
}