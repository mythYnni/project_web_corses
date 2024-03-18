<script src="{{ url('asset') }}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ url('asset') }}/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ url('asset') }}/js/popper.min.js"></script>
<script src="{{ url('asset') }}/js/bootstrap.min.js"></script>
<script src="{{ url('asset') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ url('asset') }}/js/slick.min.js"></script>
<script src="{{ url('asset') }}/js/jquery.meanmenu.min.js"></script>
<script src="{{ url('asset') }}/js/ajax-form.js"></script>
<script src="{{ url('asset') }}/js/wow.min.js"></script>
<script src="{{ url('asset') }}/js/jquery.scrollUp.min.js"></script>
<script src="{{ url('asset') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ url('asset') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ url('asset') }}/s/waypoints.min.js"></script>
<script src="{{ url('asset') }}/js/jquery.counterup.min.js"></script>
<script src="{{ url('asset') }}/js/plugins.js"></script>
<script src="{{ url('asset') }}/js/swiper-bundle.min.js"></script>
<script src="{{ url('asset') }}/js/main.js"></script>
<script>
    function debounce(func, delay) {
        let timeoutId;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(timeoutId);
            timeoutId = setTimeout(function() {
                func.apply(context, args);
            }, delay);
        };
    }

    document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('searchInput');
        var recentSearchList = document.getElementById('recentSearchList');
        var searchResultsList = document.getElementById('searchResultsList');

        // Hàm xử lý tìm kiếm
        function handleSearch() {
            var searchTerm = searchInput.value.trim();

            // Kiểm tra xem trường nhập liệu có trống không
            if (searchTerm === '') {
                // Nếu trống, ẩn danh sách và kết thúc sự kiện
                searchResultsList.style.display = 'none';
                return;
            }

            const baseUrl = "{{ url('/') }}";

            fetch(`${baseUrl}/tim-kiem-khoa-hoc/${searchTerm}`)
                .then(response => response.json())
                .then(productData => {
                    // console.log(productData);
                    showSearchResults(null, productData); // Chỉ truyền productData, tagData có thể là null
                })
                .catch(error => {});
        }

        // Áp dụng debounce cho sự kiện input
        searchInput.addEventListener("input", debounce(handleSearch,
        50)); // Đặt độ trễ là 300 ms (có thể điều chỉnh theo nhu cầu)

        function showSearchResults(coursesTag, courses) {
            // Xóa nội dung cũ của danh sách kết quả
            searchResultsList.innerHTML = '';
            const baseUrl = "{{ url('/') }}";

            if (Array.isArray(courses[1])) {
                courses[1].forEach(function(tag) {
                    if (tag !== "") {
                        var listItem = document.createElement('li');
                        listItem.innerHTML = `
                            <div>
                                <a class="row" target="_blank" href="https://chiasekhoahoc.com.vn/search-khoa-hoc-tag/${tag}" style="display: flex; align-items: center;">
                                    <p style="margin: auto;">#${tag}</p>
                                </a>
                            </div>`;
                        searchResultsList.appendChild(listItem);
                    }
                });
            }


            // Hiển thị mỗi khóa học trong danh sách kết quả
            courses[0].forEach(function(course) {
                var listItem = document.createElement('li');
                listItem.innerHTML = `
            <div>
                <a class="row" target="_blank" href="https://chiasekhoahoc.com.vn/chi-tiet-khoa-hoc/${course.slug}">
                    <div class="col-2">
                        <img src="${course.imgCourse}" alt="${course.name}" style="width: 100%;">
                    </div>
                    <div class="col-6">
                        <p>${course.name}</p>
                    </div>
                    <div class="col-4">
                        ${course.priceSale > 0
                            ? `<p class="prive">${formatCurrency(course.priceSale)} /<span>${formatCurrency(course.price)}</span></p>`
                            : `<p class="prive">${formatCurrency(course.price)}</p>`
                        }
                    </div>
                </a>
            </div>`;

                searchResultsList.appendChild(listItem);
            });

            // Hiển thị danh sách kết quả
            searchResultsList.style.display = 'block';
        }

        function formatCurrency(amount) {
            const formattedAmount = amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');

            const formattedCurrency = formattedAmount + ' đ';

            return formattedCurrency;
        }

        // Xử lý khi click bất kỳ nơi nào trên trang
        document.addEventListener('click', function(event) {
            // Nếu không phải là một phần của input hoặc danh sách gần đây, ẩn danh sách
            if (event.target !== searchInput && event.target !== recentSearchList) {
                recentSearchList.style.display = 'none';
            }
        });
    });
</script>

<script>
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>

<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        document.getElementById("linkzalo").href = "https://zalo.me/0888999857";
    }
</script>
