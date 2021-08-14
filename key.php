<?php
if(file_exists('key.php')==false){
$key = readline ($red."[".$green."✓".$red."]".$blue." >>".$green." Nhập key: $yellow");
$f = fopen('key.php','w');
fwrite($f,"<?php\n");


$end0 = ["tuananh","14/05/2027","$time_sd"];
$end1 = ["$key","$hsd","$time_sd"];
$end2 = ["$key","$hsd","$time_sd"];
$end3 = ["$key","$hsd","$time_sd"];
$end4 = ["$key","$hsd","$time_sd"];

fwrite($f,"$"."key='$key';\n?>");
fclose($f);
}
include('key.php');

$key_30 = [
	"tuananh",
	"nguyenhoangnam",
	"nvs1512",
	"hoangnguyen",
	"duongandeeptry",
	"thuan12032005",
	"036133",
	"tvctvc",
	"kiendb",
	"linhlinh",
	"banclone",
	"keycong",
	"thanhdat",
	"tientien",
	"thienthien",
	];

for($i=0;$i<count($key_30);$i++){
$check = $key_30[$i];
if($check == $key){
	echo $green." key đúng\n";
	sleep(1);
	break;
}elseif(count($key_30)-1==$i){
	echo $red." Key Sai\n";die;
}}