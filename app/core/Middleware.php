<?php

class Middleware
{
    public static function setAllowed($role)
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != $role) {
                backToPrev();
            }
        }
    }
}
