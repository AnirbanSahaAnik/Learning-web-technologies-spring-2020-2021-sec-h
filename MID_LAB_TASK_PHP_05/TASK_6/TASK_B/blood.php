<?php



	if(isset($_POST['submit']))
	{

		$name = $_POST['blood'];

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

    <form class="" action="blood.php" method="post">
      <fieldset>


        <legend>Blood Group</legend>
        <select class="blood" name="blood">
          <option value="blood">A+</option>
          <option value="blood">A-</option>
          <option value="blood">B+</option>
          <option value="blood">AB+</option>
          <option value="blood">AB-</option>
          <option value="blood">B-</option>
          <option value="blood">O+</option>
          <option value="blood">O-</option>

        </select>
        <br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
