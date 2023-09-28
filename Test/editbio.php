<?php
if(!isset($_GET['emp_id'])){
    header("refresh: 0; url=http://localhost/assign/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM employee WHERE emp_id='$_GET[emp_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>


<body>

    

<div class="container">
        <h1>Edit Customer</h1><br>
    <form id="form1" name="form1" method="post" action="editsuccess.php">
    <p>
            <label for="emp_id">ID</label>
            <input type="text" name="emp_id" id="emp_id" value="<?=$row['emp_id'];?>" readonly>
        </p>
        <p>

            <label for="emp_name">ชื่อ</label>
            <input type="text" name="emp_name" id="emp_name" value="<?=$row['emp_name'];?>">

        </p>

        <p>

            <label for="emp_mobile">เบอร์ติดต่อ</label>

            <input type="text" name="emp_mobile" id="emp_mobile" value="<?=$row['emp_mobile'];?>">

        </p>

        <p>

            <label for="emp_email">อีเมล</label>

            <input type="text" name="emp_email" id="emp_email" value="<?=$row['emp_email'];?>">

        </p>

        <p>

            <label for="emp_pass">รหัสผ่าน</label>

            <input type="text" name="emp_pass" id="emp_pass" value="<?=$row['emp_pass'];?>">

        </p>
        
        <p>

            <label for="emp_add">ที่อยู่</label>

            <input type="text" name="emp_add" id="emp_add" value="<?=$row['emp_add'];?>">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>