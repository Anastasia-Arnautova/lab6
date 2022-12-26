<?php
$message  = "";
if(isset($_POST['inputName']) && isset($_POST['inputResponse']))
{ 
  $name     = $_POST['inputName'];        // get Name
  $response = $_POST['inputResponse'];    // get Response
  $message  = $name." Send: ".$response;  // build result message
}    
?>

<html>
  <body>    
    <div><?php echo $message; ?></div>
    <button name="button" onclick="window.history.back()">Return</button>
  </body>
</html>

