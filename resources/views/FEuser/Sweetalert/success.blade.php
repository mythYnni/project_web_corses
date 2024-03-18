@if (Session::get('success'))
    <script>
        swal("{{ Session::get('success') }}", "Thông Báo Chúng Tôi Gửi Đến Bạn!", 'success', {
            button: true,
            button: "OK",
            timer: 50000,
            dangerMode: true,
        })
    </script>
@endif
