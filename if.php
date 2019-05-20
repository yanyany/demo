<?php
$arr = array(
'id'=>1,
'name'=>"aa",
"age"=>11
);
echo "第一个".key($arr)."=>".current($arr);
echo "第er个".key($arr)."=>".current($arr);
next($arr);
echo "第一个".key($arr)."=>".current($arr);