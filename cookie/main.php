<?php
setcookie("name", "Mihyeon Kim", time() + 30);
setcookie("age", "26", time() + 300);

echo $_COOKIE["name"];

?>