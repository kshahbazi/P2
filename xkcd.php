<?php
$number_of_words = $_POST['number_of_words'];#as specified by user on the formn submission
$words = array(); #an array of all the dictionary words
$new_array = array(); #the array of passwords, to be populated as requested by user
$password=""; #place-holder for the to-be generated password
$symbolsArray = array("!","@","#","$","%","^","&","*","?","~");#optional request by user to add a symbol to password

#open csv file
#approximately a thousand words
$path = "mywordlist.csv";
$file = fopen($path,"r");


#populate the array with the contents of the file
while(!feof($file)){
	array_push($words,fgetcsv($file));
	shuffle($words); #randomize everytime
}

#close csv file
fclose($file);

#iterate through the dictionary 
#depending of the number selected by the user
#to populate the new_array
for ($i = 0; $i < $number_of_words; $i++){
	array_push($new_array,$words[$i][0]);
	$password .= $new_array[$i];	
}


#include a symbol if specified 
#by user on the formn submission
if(isset($_POST['include_symbol']))
{
	shuffle($symbolsArray);
	$password .= $symbolsArray[0];
}

?>