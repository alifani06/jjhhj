<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
<h1 align="center">Operator Bitwise</h1>

<?php
 


$a=6; //00000110
$b=76;//01001100
 
echo "<br> \$a : ".$a;
echo "<br> \$b : ".$b;

echo "<br><br> \$a & \$b : ".($a & $b);
echo "<br> \$a | \$b    : ".($a | $b);
echo "<br> \$a ^ \$b    : ".($a ^ $b);
echo "<br> ~\$a         : ".(~$a);
echo "<br> \$a << 2   : ".($a << 2);
echo "<br> \$a >> 2  : ".($a >> 2);

?>
    
</body>
</html>