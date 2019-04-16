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
<form method="post">
    <fieldset>
        <legend>Calculator</legend>
       <label>First operand:
        <input type="text" name="first"><br/><br/>
        Operator:
        <select name="select">
            <option value="-">Subtraction(-)</option>
            <option value="+">Addition(+)</option>
            <option value="X">Multiplication(X)</option>
            <option value="/">Division(/)</option>
        </select>
        <br/><br/>
        Second operand:
        <input type="text" name="second">
        <br/><br/>
        <input type="submit" value="calculate">
       </label>
    </fieldset>
</form>

<?php
 require "Operand.php";

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $first = $_POST["first"];
    $second = $_POST["second"];
    $select = $_POST["select"];
}
$newNumber = new Operand($first,$second,$select);
$newNumber->calculate();
?>
</body>
</html>
