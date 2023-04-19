<?php
include "init.php";
global $userObj;

echo $userObj->hash('password');