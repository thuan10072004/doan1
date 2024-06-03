<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <h2>Danh sách tài khoản người dùng</h2>
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../Config/Connect.php");

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        echo "<td>" . htmlspecialchars($row['userName']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo '<tr><td colspan="5">Không có tài khoản nào.</td></tr>';
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>