<?php
    function kelulusan($total_nilai) {
        if($total_nilai >= 55){
            echo "<td>LULUS</td>";
    
        }else {
            echo "<td>Tidak LULUS</td>";
        }
    }
	
	function grade($total_nilai) {
	    if($total_nilai <= 35){
            echo "<td>E</td>";
        } elseif ($total_nilai <= 55) {
            echo "<td>D</td>";
        } elseif ($total_nilai >= 69) {
            echo "<td>C</td>";
        } elseif ($total_nilai >= 84) {
            echo "<td>B</td>";
        } elseif ($total_nilai >= 100){
            echo "<td>A</td>";
        } else {
            echo "<td>I</td>";
        }
        

	}
	
	function predikat($total_nilai){
        switch($total_nilai){
            case ($total_nilai >= 0 && $total_nilai <= 35):
                echo "<td> Sangat Kurang </td>";
                break;
            case ($total_nilai >= 36 && $total_nilai <= 55):
                echo "<td> Kurang </td>";
                break;
            case ($total_nilai >= 56 && $total_nilai <= 69):
                echo "<td> Cukup </td>";
                break;
            case ($total_nilai >= 70 && $total_nilai <= 84):
                echo "<td> Memuaskan </td>";
                break;
            case ($total_nilai >= 85) :
                echo "<td> Sangat Puas </td>";
                break;
            default:
                echo "<td> Tidak Ada </td>";
                break;
        }

	}
?>

			
		
