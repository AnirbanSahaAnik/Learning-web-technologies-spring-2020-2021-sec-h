<?php



	if(isset($_POST['submit']))
	{

		$name 		= $_POST['Degree'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="degree.php" method="post">
      <fieldset>


        <legend>Degree</legend>
        <input type="checkbox" name="Degree" value="male"> SSC
        <input type="checkbox" name="Degree" value="male"> HSC
        <input type="checkbox" name="Degree" value="male"> BSc
        <br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
