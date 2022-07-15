Lite Breeze
<?php

$inputString 	= "Loreme ipsum dolor sit amet bcd";
$findChars 		= ['E', 'A', 'R'];
$result 		= getCharacterCount($inputString, $findChars);
print_r($result);

//This function accepts a string and array of characters
//Return the count of all characters in the string
function getCharacterCount($inputString, $findChars){
	$stringArr = explode(" ", $inputString);
	$resArr = [];
	foreach ($stringArr as $key => $word) {
		foreach ($findChars as $findChar) {
			//if($charCnt = substr_count(strtolower($word), strtolower($findChar)))
			if($charCnt = getCharCount(strtolower($word), strtolower($findChar)))
				$resArr[$word] = (isset($resArr[$word])) ? $resArr[$word] + $charCnt : $charCnt;
		}
	}
	arsort($resArr);//Sort the values in Descending order
	return $resArr;
}

//This function accepts a string and character 
//Return the count of the character in the string
function getCharCount($string, $char){
	$cnt = 0;
	for ($i = 0; $i < strlen($string); $i++) 
	    if($string[$i] == $char) $cnt++;
	return $cnt;
}

