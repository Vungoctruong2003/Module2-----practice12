<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <table>
        <tr>
            <td>
                <input type="number" name="num1">
            </td>
            <td>
                <input type="number" name="num2">
            </td>
            <td>
                <input type="submit" value="Calculator">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    try {
        if($num2 == 0){
            throw new Exception("Can't divide by zero");
        }
        echo $num1/$num2;
    }catch (Exception $e){
        echo "Warning: ".$e->getMessage();
    }
}