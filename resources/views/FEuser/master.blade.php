<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/x-icon" href="{{ url('asset') }}/img/herobanner/logoKXanh-01.png">
    <title>Khóa Học Online | Chia Sẻ Khoá Học Online Qua Drive</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- CSS -->
    @yield('css_setting_profile')
    @include('FEuser.Layout.css.mastercss')
    <!-- END CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/font-awesome.min.css">
    @yield('meta')
</head>

<body class="body__wrapper">
    <!-- pre loader area start -->
    @include('FEuser.Layout.Loader.loader')
    <!-- pre loader area end -->
    <!-- :: PAGES -->
    <main class="main_wrapper overflow-hidden">
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->

        <!-- Pages -->
        @yield('Edurock_Home_View')

        {{-- 404 --}}
        @yield('error_404_view')
        {{-- End 404 --}}
    </main>

    <a href="https://www.facebook.com/groups/khokhoahoconline" id="linkzalo" target="_blank" rel="noopener noreferrer">
        <div class="fcta-zalo-vi-tri-nut-facebook">
            <div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut-facebook">
                <div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut">
                    <img style="width: 100%;" src="{{ url('asset') }}/img/herobanner/facebook.png">
                </div>
            </div>
        </div>
    </a>

    <a href="https://t.me/chiasekhoahoconline" id="linkzalo" target="_blank" rel="noopener noreferrer">
        <div class="fcta-zalo-vi-tri-nut-telegram">
            <div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut-telegram">
                <div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut">
                    <img style="width: 100%;" src="{{ url('asset') }}/img/herobanner/telegram.png">
                </div>
            </div>
        </div>
    </a>

    <!-- :: END PAGES -->

    <a href="https://chat.zalo.me/?phone=0888999857" id="linkzalo" target="_blank" rel="noopener noreferrer">
        <div class="fcta-zalo-vi-tri-nut">
            <div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut">
                <div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut">
                    <img style="width: 100%;" src="{{ url('asset') }}/img/herobanner/zalo.png">
                </div>
            </div>
        </div>
    </a>
    <!-- JS -->
    @include('FEuser.Layout.js.masterjs')
    @yield('page_js')
    <script src="https://kit.fontawesome.com/86b9967491.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- :: SUCCESS -->
    @include('FEuser.Sweetalert.success')
    <!-- :: END SUCCESS -->
    <!-- :: ERROR -->
    @include('FEuser.Sweetalert.error')
    <!-- :: END ERROR -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102194922050034");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
        // Lấy phần tử cần thao tác
        var searchToggle = document.getElementById('searchToggle');
        var mobMenuWrapper = document.querySelector('.antimkiem');
        var headerArea = document.querySelector('.headerarea');

        // Thêm sự kiện click
        searchToggle.addEventListener('click', function() {
            // Toggle hiển thị/ẩn của mobMenuWrapper
            if (mobMenuWrapper.style.display === 'none' || mobMenuWrapper.style.display === '') {
                mobMenuWrapper.style.display = 'block';
            } else {
                mobMenuWrapper.style.display = 'none';
            }
        });

        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                mobMenuWrapper.style.display = 'none';
            }
        });
    </script>
</body>

</html>
