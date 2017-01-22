<?php
$_SESSION['name'] = filter_input(INPUT_POST,'name');
$_SESSION['email'] = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$_SESSION['major'] = filter_input(INPUT_POST,'major');
$_SESSION['continent'] = filter_input(INPUT_POST,'continent', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
$_SESSION['comments'] = filter_input(INPUT_POST,'comments');
?>