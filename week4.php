<HTML>
<?php
date_default_timezone_set('PRC'); 
echo date("y-m-d H:i:s l",time());
echo "<font color=red>世界末日倒计时！</font>"."<p>";
 $time1=strtotime(date("Y-m-d H:i:s")); //当前系统时间
 $time2=strtotime("2017-12-31"); 
 $sub1=ceil(($time2-$time1)/3600);
 $sub2=ceil(($time2-$time1)/60);
 $sub3=ceil($time2-$time1);
 echo "距离世界末日还有<font color=red>$sub1</font>天！！"."<p>";
 echo "距离世界末日还有<font color=red>$sub2</font>分！！"."<p>";
 echo "距离世界末日还有<font color=red>$sub3</font>秒！！"."<p>";


?>
</HTML>
