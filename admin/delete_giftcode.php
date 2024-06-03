<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: acc_admin.php');
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: Admin.php');
    exit;
}

require("../Config/Connect.php");

$giftcode_id = $_GET['id'];

$sql = "DELETE FROM giftcode WHERE giftCodeId = $giftcode_id";

if ($conn->query($sql) === TRUE) {
    echo "Xóa giftcode thành công";
    header("location: giftcode.php");

} else {
    echo "Lỗi: " . $conn->error;
}

$stmt->close();
$conn->close();
?>