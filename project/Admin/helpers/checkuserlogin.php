<?php

if (!isset($_SESSION['user'])) {
    header("Location: ." . url('buy.php'));
}
