<?php
// sleep(10); // 暫停 10 秒

$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;

echo $a + $b;