
<?php
function validate_or_bounce()
{
   if (!isset($_SESSION['username']))
   header("Location: login.php");
}
?>




