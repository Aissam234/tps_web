<?php
	
	function digitCubes($number) {
        $sum = 0;
        $digits = str_split($number); 
        foreach ($digits as $digit) {
            $sum += $digit ** 3; 
        }
        return $sum;
    }
    
    
    for ($num = 1; $num < 1000; $num++) {
        if ($num === digitCubes($num)) {
            echo "<li>$num</li>"; 
        }
    }
?>
