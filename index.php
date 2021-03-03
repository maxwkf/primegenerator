<?php
$time_start = microtime(true); 

function p($a,$b) {
    echo nl2br($a."->".$b."\r\n");
}

$list = [];
$primeList=[];
$range = 50000;
for($currentNumber=2;$currentNumber<=$range;$currentNumber++) {
    
    
    // use currently found prime to filter out unecessary number first
    $isGoNext = false;
    foreach ($primeList as $pk => $p) {
        if (
            $currentNumber%$p==0
            ) {
            $isGoNext = true;
            break;
        }
    }
    if ($isGoNext) {
        continue;
    }
    
//     if ($currentNumber!=1){
       $primeList[] = $currentNumber;
//     }
    
//     $halfway = floor($currentNumber/2);
    
//     for($divider=$halfway; $divider>0; $divider--) {
        
//         if ($divider == 1) {
//             // this is prime number
//             $primeList[] = $currentNumber;
//             break;
//         }
        
//     }
    
}

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time_in_s = ($time_end - $time_start);

//execution time of the script
echo '<p><b>Total Execution Time:</b> '.$execution_time_in_s.' Secs == ' . ($execution_time_in_s/60). ' Mins</p>';

var_dump($primeList);
