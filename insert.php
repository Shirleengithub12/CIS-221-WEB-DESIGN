<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>
        Insert data into our table
    </h1>
</head>
<body>
    <center>
    <?php
    require "dbconnect.php";
    $firstname= $_REQUEST["first_name"];
    $lastname= $_REQUEST["last_name"];
    $gender= $_REQUEST["gender"];
    $BookTitle = $_REQUEST["BookTitle"];
    $ADM Number = $_REQUEST["ADM Number"];
    $BookNumber = $_REQUEST["BookNumber"];
    $Year=$_REQUEST["Year"];
    $sql = "insert into staff values('$firstname','$lastname','$gender', '$BookTitle','$ADM Number','$BookNumber','$Year')";
    if($conn->query($sql)===True){
        echo "records inserted";
    }
    else{
        echo "error";
    }
    ?>
    </center>
    

</body>
</html>