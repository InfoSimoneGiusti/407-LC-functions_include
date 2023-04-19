<?php

    session_start();

    if (isset($_SESSION['pippo'])) {
        echo $_SESSION['pippo'];
    }