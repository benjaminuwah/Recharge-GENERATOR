<html>
<head>
    <title>Code Generator</title>
</head>

<body>
<header>
    <h1>Code Generator</h1>
</header>
<hr>
<br>
<table>
  <tr>
    <th>Recharge Cards 1 - 200</th>
  </tr>
</table>
<br>

<?php
$x = 1;
do {
    echo(rand(100000000000,999999999999) . "<br>");
    $x++;
} while ($x <= 200);
?>

</body>
</html>