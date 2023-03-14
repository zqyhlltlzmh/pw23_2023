<?php

    function winRate($jumlahMenang, $jumlahKalah) {
        $totalMatch = $jumlahMenang + $jumlahKalah;
        $wr = $jumlahMenang / $totalMatch;

        return $wr;
    }

    function cekTier($winRate) {
        if ($winRate >= 0.7) {
            return 'Mythic';
        } elseif ($winRate >= 0.45) {
            return 'Legend';
        } elseif ($winRate >= 0.2) {
            return 'Epic';
        } else {
            return 'Master';
        }
    }

    function predikat($winRate) {
        switch (cekTier($winRate)){
            case 'Mythic':
                return 'Sangat Memuaskan';
                break;
            case 'Legend':
                return 'Memuaskan';
                break;
            case 'Epic':
                return 'mengecewakan';
                break;
            default:
                return 'Sangat Mengecewakan';
                break;
        }
    }

?>