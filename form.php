//addition and substraction of two numbers
<html>
<head>
<title>php program for addition and substraction of two numbers</title>
</head>
<body>
<form method ="post">
<table border="0">
<tr>
<td>
<td><input type ="text" name="num1" value="" placeholder="enter a value"/></td>
</tr>
<tr>
<td><input type ="text" name ="num2" value="" placeholder="enter b value"/></td>
</tr>
<tr>
<td><input type ="submit" name="submit" value="submit"/>
</td>
</tr>
</table>
</form>
<?php
if (isset($_POST["submit"]))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $sum=$a+$b; //addition of two numbers
    $diff=$a-$b;//subtraction of teo number
    echo "addition=".$sum;
    echo "subtraction=".$diff;
    return 0;
}
?>
</body>
</html>
