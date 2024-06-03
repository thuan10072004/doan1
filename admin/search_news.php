<tbody id="search-results">
    <?php
    require("../Config/Connect.php");

    if (isset($_POST['query'])) {
        // sử dụng real_escape_string chống sql injection 
        //  real_escape_string chuyển đổi các kí tự đặc biệt thành các phiên bản đặt trong nháy đơn 
        $query = $conn->real_escape_string($_POST['query']);
        $sql = "SELECT * FROM news WHERE title LIKE '%$query%' OR news_category LIKE '%$query%' LIMIT 10";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Xuất dữ liệu tin tức mà không bao gồm cấu trúc HTML
                echo "<tr>";
                echo "<td>" . $row['news_id'] . "</td>";
                // hàm htmlspecialchars chuyển đổi các kí tự đặc biệt thành các html , ngăn chặn kí tự đb như <>&
                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                echo "<td><img src='uploads/" . $row['image'] . "' width='100'></td>";
                echo "<td>" . htmlspecialchars($row['news_category']) . "</td>";
                echo "<td><a href='edit_news.php?id=" . $row['news_id'] . "'>Sửa</a> | <a href='delete_news.php?id=" . $row['news_id'] . "'>Xóa</a></td>";
                echo "</tr>";
            }
        } else {
            echo '<tr><td colspan="5">Không tìm thấy kết quả.</td></tr>';
        }
        exit(); // Kết thúc  PHP và ngăn không cho mã HTML khác được xuất ra
    } else {
        $sql = "SELECT * FROM news";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['news_id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td><img src='uploads/" . $row['image'] . "' width='100'></td>";
            echo "<td>" . $row['news_category'] . "</td>";
            echo "<td><a href='edit_news.php?id=" . $row['news_id'] . "'>Sửa</a> | <a href='delete_news.php?id=" . $row['news_id'] . "'>Xóa</a></td>";
            echo "</tr>";
        }
    }
    $conn->close();
    ?>
</tbody>