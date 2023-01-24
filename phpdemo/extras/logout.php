<?php
session_start();

//detsroy the session
session_destroy();
header('Location: /mark/phpdemo/13.session.php');