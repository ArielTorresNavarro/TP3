
<?php
$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");

$acumuladora= 0;
$contadora= 0;

if ($B<0) {
    $B *= -1;
    $A *= -1;
}

while ($contadora < $B) { //$contadora es estrictamente menor que $B porque empieza en 0
    $acumuladora += $A;
    $contadora++;
}
echo "$A x $B = $acumuladora"

for ($contadora= 0; $acumuladora = 0; $contadora<$B; $contadora++) {
    $acumuladora += $A;
}
echo "$A x $B = $acumuladora"
?>