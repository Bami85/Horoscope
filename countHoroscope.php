<?php

function countHoroscope($date) {

    $subDate = substr($date, -5);

    if ($date === "") {
        return "inget datum angivet";
    } elseif ("03-21" <= $subDate && $subDate <= "04-19") {
        return "Aries";
    } elseif ("04-20" <= $subDate && $subDate <= "05-20") {
        return "Taurus";
    } elseif ("05-21" <= $subDate && $subDate <= "06-20") {
        return "Gemini";
    } elseif ("06-21" <= $subDate && $subDate <= "07-22") {
        return "Cancer";
    } elseif ("07-23" <= $subDate && $subDate <= "08-22") {
        return "Leo";
    } elseif ("08-23" <= $subDate && $subDate <= "09-22") {
        return "Virgo";
    } elseif ("09-23" <= $subDate && $subDate <= "10-22") {
        return "Libra";
    } elseif ("10-23" <= $subDate && $subDate <= "11-21") {
        return "Scorpio";
    } elseif ("11-22" <= $subDate && $subDate <= "12-21") {
        return "Saggitarius";
    } elseif ("12-22" <= $subDate || $subDate <= "01-19") {
        return "Capricorn";
    } elseif ("01-20" <= $subDate && $subDate <= "02-18") {
        return "Aquarius";
    } elseif ("02-19" <= $subDate && $subDate <= "03-20") {
        return "Pisces";
    } else {
        return "Inget horoskop hittat";
    }
}

?>