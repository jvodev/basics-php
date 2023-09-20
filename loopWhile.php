<?php
 $estouEmpregado = true;
 $comitsZoados = 0;

 while($estouEmpregado) {
    echo "Eu fiz " . $comitsZoados . " commits zoados e meu superior não curtiu" . PHP_EOL;
    $comitsZoados++;
    if ($comitsZoados == 8) {
        $estouEmpregado = false;
        echo "Estou desempregado agora";
    }

 }

?>