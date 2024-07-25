<?php

function checkPort($port, $container) {

$connection = @fsockopen($container, $port);

    if (is_resource($connection)) {

        fclose($connection);
        // return '<span class="dot-green"></span>';
        return "🟢";

    } else {

        // return '<span class="dot-red"></span>';
        return "🔴";
    }
}

$data = "<table>";

foreach([
        "Feeder"          => 80,
        "FlightAware"     => 8080,
        "FlightRadar24"   => 8754,
        "PlaneFinder"     => 30053,
        "Gatus"           => 8080,
    ] as $key => $val) {
    $data .= "<tr>";
    $data .= "<td>". $key ."</td>";
    $data .= "<td>". checkPort($val, strtolower($key)) ."</td>";
    $data .= "</tr>";
}

$data .= "</table>";
?>