<?php
function mayor(): int{
    $argumentos = func_get_args();
    
    $mayor = $argumentos[0];
    
    foreach ($argumentos as $valor) {
        if ($valor > $mayor) {
            $mayor = $valor;
        }
    }
    
    return $mayor;
}

function concatenar(...$palabras) : string{
    $palabras = func_get_args();
    
    $concat = $palabras[0];
    
    foreach ($palabras as $valor) {
        $valor .= $valor;
    }
    
    return $valor;
}
?>