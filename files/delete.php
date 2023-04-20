<?php

require_once "../auth.php";

require_once "../class/crud.php";
$crud = new Crud();
$crud->Delete($_GET["d"]);
header("Location: ../delete.php");
exit;


?>