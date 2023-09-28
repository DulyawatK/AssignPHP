<?php
    require 'conn.php';
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Employee</title>
    
</head>

<body>

    <div class="container">
        <h1>Employee</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">เบอร์ติดต่อ</th>
                    <th scope="col-4">อีเมล</th>
                    <th scope="col-4">รหัสผ่าน</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">แก้ไข</th>
                    <th scope="col-4">ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["emp_id"]."</td>"."<td>".$row["emp_name"]."</td>"."<td>".$row["emp_mobile"]."</td>"."<td>".$row["emp_email"]."</td>"."<td>".$row["emp_pass"]."</td>"."<td>".$row["emp_add"]."</td>"
                            ."<td>"."<a class='btn btn-warning' href='editbio.php?emp_id=".$row["emp_id"]."'>แก้ไข</a>"."</td>"
                            ."<td>"."<a class='btn btn-danger' href='deletebio.php?emp_id=".$row["emp_id"]."'>ลบ</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertbio.php'>Insert Employee</a>
    </div>
</body>

</html>