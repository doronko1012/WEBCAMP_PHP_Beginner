<?php
// ファイル名の把握
$file_name = __DIR__;

// ファイル全体の読み込み
$write_string = file_get_contents($file_name. "/test.php");


// ファイルに書き込む
 file_put_contents($file_name. "/file_copy.php", $write_string);
