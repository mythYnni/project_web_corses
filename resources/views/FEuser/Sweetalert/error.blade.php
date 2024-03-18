@if (Session::get('error'))
    <script>
        swal(
            "{{ Session::get('error') }}", "Thông Báo Chúng Tôi Gửi Đến Bạn!", 'error', {
                button: true,
                button: "OK",
                timer: 50000,
                dangerMode: true,
            })
    </script>
@endif