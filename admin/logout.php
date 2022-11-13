<<<<<<< HEAD
<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login");
exit;

=======
<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login");
exit;

>>>>>>> 48a9281da62ed2864d4c21a8314ea27adad79be8
?>