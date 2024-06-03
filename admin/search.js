//  lấy phần tử HTML có id là "search-input"
// gắn một sự kiện "keyup" vào phần tử "search-input" và xử lý bằng một hàm với đối số là event
document.getElementById('search-input').addEventListener('keyup', function (event) {
    // biến query lưu giá trị của phần tử "search-input
    let query = this.value;
    if (query.length >= 0) {
        event.preventDefault(); // Ngăn chặn hành vi mặc định của trình duyệt
        // Tạo một đối tượng XMLHttpRequest mới xhr
        let xhr = new XMLHttpRequest();
        // kết nối POST tới tập tin "search_news.php" trên máy chủ
        xhr.open('POST', 'search_news.php', true);
        // Đặt tiêu đề Content-type là "application/x-www-form-urlencoded"
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            // Nếu readyState bằng 4  và status bằng 200 tức là yêu cầu thành công, gán nội dung trả về từ server vào phần tử có id là "search-results"
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('search-results').innerHTML = xhr.responseText;
            }
        };
        // Gửi yêu cầu POST với dữ liệu query được mã hóa
        xhr.send('query=' + encodeURIComponent(query));
    } else {
        // ngược lại không có gì trong input thì gán nội dung rỗng cho phần tử có id là "search-result"
        document.getElementById('search-results').innerHTML = '';
    }
});
