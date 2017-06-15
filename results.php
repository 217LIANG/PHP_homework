<HTML>
<?php
$name=$_GET["textfield"];
$gender=$_GET["sex"];
$grade=$_GET["textfield3"];
$email=$_GET["textfield4"];
$phone=$_GET["textfield5"];
echo "Your name is:".$name."<br/>";
echo "Your grade and class is:".$grade."<br/>";
echo "Your email is:".$email."<br/>";
echo "Your phone is:".$phone."<br/>";
if($gender=="male"){
echo "your gender is 男生<br>";}
else
{echo "your gender is 女生<br>";
echo "<body bgcolor='pink'>";}

?>
</HTML>
