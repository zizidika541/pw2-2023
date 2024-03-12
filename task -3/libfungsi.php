<?php

// Function kelulusan
function kelulusan($lulus)
{
    if ($rerata > 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

// Function grade
function grade($rerata)
{
    if ($rerata <= 100) {
        return "A";
    } elseif ($rerata <= 84) {
        return "B";
    } elseif ($rerata <= 69) {
        return "C";
    } elseif ($rerata <= 55) {
        return "D";
    } elseif ($rerata <= 35) {
        return "E";
    } else {
        return "I";
    }
}

// Function predikat
function predikat($grade)
{
    switch ($grade) {
        case 'A':
            return "Sangat Memuaskan";
            break;
        case 'B':
            return "Memuaskan";
            break;
        case 'C':
            return "Cukup";
            break;
        case 'D':
            return "Kurang";
            break;
        case 'E':
            return "Sangat Kurang";
            break;
        default:
            return "Tidak Diketahui";
            break;
    }
}
?>