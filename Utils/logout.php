<?php
session_start();
session_destroy();
session_abort();

header("Location: ../Pages/Login/");
