<?php

if ($_SESSION['user']['u_role'] != 2) {

    header("Location: " . url('buy.php'));
}
