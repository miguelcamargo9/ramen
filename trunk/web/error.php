<?php

session_start();
echo $_SESSION['error'];
session_destroy();
