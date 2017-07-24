<?php
$delay = isset($_GET['delay']) ? intval($_GET['delay']) : 0;
sleep($delay);
readfile('image.jpg');