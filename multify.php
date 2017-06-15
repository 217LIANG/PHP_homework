<HTML>
<?php
//require("index.inc");
//echo time()."<br/>";
//$now=mktime();
//foreach($nowdate as $new){
	//echo $new."<br/>";
//}
//foreach($nowdate as $key=>$value){
	//echo $key."=>".$value;
	//echo "<br/>";
//}
//echo"今天是".$nowdate["year"]."年".$nowdate["month"]."月".$nowdate["mday"]."日";
echo date("F j l");
$n=$_GET["text1"];
$m=$_GET["text2"];
echo"<table border='1'>";
echo"<tr>";
echo"<td>*";
echo"</td>";
for($j=1;$j<=$m;$j++){
echo"<td>";
echo $j;
echo"</td>";
}
echo"<tr/>";
for($i=0;$i<=$n;$i++){
    echo"<tr>";
    echo"<td>".$i."</td>";
for($j=1;$j<=$m;$j++){
	echo"<td>";
	echo $i."*".$j."=".$i*$j."\t";
	echo"</td>";
}
echo"<tr/>";
echo"<br/>";
	
}
echo"</table>";
?>

</HTML>