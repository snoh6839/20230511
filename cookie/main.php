<?php
setcookie("name", "Mihyeon Kim", time() + 30);
setcookie("age", "26", time() + 300);

var_dump($_COOKIE);

setcookie("age", "", 0);
?>