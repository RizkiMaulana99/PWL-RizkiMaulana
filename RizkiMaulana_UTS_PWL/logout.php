<?php
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);
//landing page
header('location:http://localhost:8080/RizkiMaulana_UTS_PWL/index.php?hal=home');