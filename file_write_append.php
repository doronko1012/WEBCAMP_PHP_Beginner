<?php
// ファイル名の把握
$file_name = __DIR__ . "/flie_write_append.txt";

// ファイルに書き込む内容
$write_string = "書き込む内容2 \n";

// ファイルに書き込む
file_put_contents($file_name, $write_string, FILE_APPEND | LOCK_EX);