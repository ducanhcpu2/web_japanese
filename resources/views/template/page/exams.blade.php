<?php
$json = '[{"id":1,"email":"ducanh@gmail.com","name":"nguy\u1ec5n \u0110\u1ee9c Anh","id_exam":1,"topic":"b\u00e0i ki\u1ec3m tra 1","status":"not yet","level":"n5"}]';
$arr = json_decode($json, true); // true nếu muốn Json dạng Array;
print_r($arr);
?>