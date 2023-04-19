<?php

function checkEmail($email) {
    $result = false;
    if (str_contains($email, '@') && str_contains($email, '.')) {
        $result = true;
    }

    return $result;
}
