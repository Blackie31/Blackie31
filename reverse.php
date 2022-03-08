<?php
$var="floor:floor1/age:12/warehouse:wh1";
$example= explode("/",$var);
$example1=explode(":",$example);
$var2=$example[0].':'.$example[1].':'.$example[2];
$split_val=explode(":",$var2);
$var1=strtoupper($split_val[1].':'.$split_val[0].'/'.$split_val[3].':'.$split_val[2].'/'.$split_val[5].':'.$split_val[4]);
echo $var1;
?>
