<?php 

function binarySearch(Array $arr, $x) 
{ 
	// check for empty array 
    if (count($arr) === 0) 
    return false; 
	$low = 0; //Initalize to zero
	$high = count($arr) - 1; //size of an array
	
	while ($low <= $high) { 
            $mid = floor(($low + $high) / 2);  // compute middle index
            if($arr[$mid] == $x)    // if element found at mid
            { 
            return true; 
            } 
            if ( $x < $arr[$mid])
            { 
			 $high = $mid -1;       // search the left side of the array
            } 
            else 
            $low = $mid + 1;    // search the right side of the array
		    
	} 
	return false; // If we reach here element x doesnt exist
} 

// Input array
$arr = array(1, 2, 3, 4, 5); 
$value = 5; 
print_r($arr);//printing input value
echo "<br />";
echo "Value " .$value ." to be found";
echo "<br />";
if(binarySearch($arr, $value) == true) { 
	echo "Value ". $value." Exists"; //print Exists if vale found
} 
else { 
	echo "Value ". $value." Doesnt Exist"; //print Doesnt Exists if value not found
} 
?> 
