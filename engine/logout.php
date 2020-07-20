<?php
session_start();

if ($_SESSION['Login'] == true) {
    unset($_SESSION['Login']);
    header('Location: /');
}