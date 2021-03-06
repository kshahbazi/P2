<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="P2.css">
<title>P2 - xkcd Password Generator</title>

<script type="text/javascript">
/*
Need to validate that one of 
the 'number_of_words' radio
buttons have been selected
*/
function formValidate(){
	var radio_buttons = document.getElementsByName('number_of_words')

	//since the buttons are an array, loop
    for (var i = 0; i < radio_buttons.length; i++) {
        if (radio_buttons[i].checked) 
		{
        	//success, proceed to xkcd script
			return true;
    	}
    };

    //if no radio button selected, show error
    document.getElementById('error').innerHTML = 'Please select 3, 4, or 5 for the number of words.';
    //and clear any password generated previously
	document.getElementById('password').innerHTML = '';
    //failed, remain on this page until form is satisfactorily completed
	return false;
}
</script>

<?php require 'xkcd.php'; ?>
</head>

<body>
	<div id="inner-wrapper">
		<div id="heading">
			<p>P2 - xkcd Password Generator</p> 
		</div>
    
				<h1>Create a hard-to-crack password <br> 
				that's easy for you to remember.</h1>
								
			<p id="main-text">
       			Select the number of words you wish to generate in addition to numbers, symbols
       			and whether to have the first letter of each word capitalized, i.e. 'CamelCase'
    		</p>
    <hr>
                
    <form name="passwordForm" action="P2.php" method="post" onSubmit="return formValidate()">
			<div id='form-options'>		 
				
				<div id="radioButtons">
					<label for='number_of_words'># of Words</label><br>
									
                	<input type="radio" name="number_of_words" value="3" /> Three
                	<input type="radio" name="number_of_words" value="4" /> Four
                	<input type="radio" name="number_of_words" value="5" /> Five<br>
					<div id="error"></div>
				</div>
                
                <input type="checkbox" name="include_number" value="include_number">Include Number<br>

                <input type="checkbox" name="include_symbol" value="include_symbol">Include Symbol<br> 
 
				<input type="checkbox" name="include_camel" value="include_camel">Make CamelCase<br> 
                
            </div>
		<br><br>
			<input type='submit' class='btn btn-default' value='Generate Password'>
            					
	</form>
    <p>YourPassword: </p>
        <p id='password'><?php echo $password?></p>
    </div>
</body>
</html>
