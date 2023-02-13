<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_number = intval($_POST['input_number']);

    function sloane_sequence($n) {
        $result = array();
        for ($i = 1; $i <= $n; $i++) {
            $result[] = intval($i * ($i + 1) / 2);
        }
        return $result;
    }

    $sequence = sloane_sequence($input_number);
    echo implode("-", $sequence);
}

?>