<?php
$fp = fopen("test.txt", a) or exit("khong the mo duoc file");
echo fgets($fp);
fclose($fp);
?>