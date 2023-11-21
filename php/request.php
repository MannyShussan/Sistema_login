<?php
function requestDevices()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "iot");
    $query = "SELECT * FROM devices";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        $colunm[] = $row;
    }
    $mysqli->close();
    return $colunm;
}

function filter($filter, $array){
    $filtro[0] = 0;
        for ($i = 0; $i < sizeof($array); $i++) {
            if ($i === 0) {
                $filtro[0] = $array[$i]["$filter"];
            } else {
                $achado = false;
                for ($j = 0; $j < sizeof($filtro); $j++) {
                    if ($array[$i]["$filter"] === $filtro[$j]) {
                        $achado = true;
                    }
                }
                if (!$achado) {
                    $filtro[] = $array[$i]["$filter"];
                }
            }
        }
        return $filtro;
}