<?php
if (!function_exists('formatRupiah')){
    function formatRupiah($number, $decimals=0, $decimalSperator =',', $thousandSperator ='.'){
        $formatedNumbers = number_format($number,$decimals,$decimalSperator,$thousandSperator);
        return 'Rp. ' . $formatedNumbers;
    }
}
