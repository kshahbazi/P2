<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="P2.css">
<title>P2 - xkcd Password Generator</title>

<script language="JavaScript" type="text/javascript">
function formValidate(passwordForm){
	if (document.forms["passwordForm"]["number_of_words"]){
		alert("Please select the number of words for your password");
		return false;
	}
}
</script>

<?php require 'xkcd.php'; ?>
</head>

<body>
	<div id="inner-wrapper">
		<div id="heading">
			<p>P2 - xkcd Password Generator</p> 
		</div>
    
    <p id="main-text">
				<h1>Create a hard-to-crack password<br> 
				that's easy for you to remember.</h1><br>
				
       			Select the number of words you wish to generate in addition to numbers, symbols
       			and whether to have the first letter of each word capitalized, i.e. 'CamelCase'
    </p>
    <hr>
                
    <form name="passwordForm" action="P2.php" method="post" onSubmit="return formValidate">
			<div id='form-options'>		 
				
				<div id="radioButtons">
					<label for='number_of_words'># of Words</label><br>
									
                	<input type="radio" name="number_of_words" value="3" /> Three
                	<input type="radio" name="number_of_words" value="4" /> Four
                	<input type="radio" name="number_of_words" value="5" /> Five<br>
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
