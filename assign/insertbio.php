<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
<div class="container">
        <h1>Insert Customer</h1><br>
    <form id="form1" name="form1" method="post" action="insertbiosuccess.php">
        <p>
            <label for="sid">ID</label>
            <input type="number" name="sid" id="sid" value="<?=$row['sid'];?>" >
        </p>


        <p>

            <label for="cname">ชื่อ</label>
            <input type="text" name="cname" id="cname">

        </p>

        <p>

            <label for="clastname">นามสกุล</label>

            <input type="text" name="clastname" id="clastname">

        </p>

        <p>

            <label for="address">ที่อยู่</label>

            <input type="text" name="address" id="address">

        </p>

        <p>

            <label for="telephone">เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>