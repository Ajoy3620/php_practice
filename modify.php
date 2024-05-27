<?php
session_start();
?>
<html>
<body>

<?php
$_SESSION ["favhobby"] = "Eating";
print_r ($_SESSION);
?>

</body>
</html>