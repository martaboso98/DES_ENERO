<?php
$fecha = date('Y-m-d');

//A español
$meses = array(
    'January' => 'enero',
    'February' => 'febrero',
    'March' => 'marzo',
    'April' => 'abril',
    'May' => 'mayo',
    'June' => 'junio',
    'July' => 'julio',
    'August' => 'agosto',
    'September' => 'septiembre',
    'October' => 'octubre',
    'November' => 'noviembre',
    'December' => 'diciembre'
);

$dias_semana = array(
    'Monday' => 'lunes',
    'Tuesday' => 'martes',
    'Wednesday' => 'miércoles',
    'Thursday' => 'jueves',
    'Friday' => 'viernes',
    'Saturday' => 'sábado',
    'Sunday' => 'domingo'
);

//Cambiar el formato
$fecha_formato = strftime("%A %e de %B de %Y", strtotime($fecha));

//Reemplazar al español
$fecha_formato = strtr($fecha_formato, array_merge($meses, $dias_semana));

echo $fecha_formato;
