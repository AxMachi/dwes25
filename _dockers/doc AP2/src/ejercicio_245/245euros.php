<?php

function pesetas2euros(float $pesetas=1, float $cotizacion=0.000080) : float {
    return $pesetas * $cotizacion;
}

function euros2pesetas(float $euros=1, float $cotizacion=166.36) : float {
    return $euros * $cotizacion;
}

// echo pesetas2euros()."<br><br>".euros2pesetas();

?>