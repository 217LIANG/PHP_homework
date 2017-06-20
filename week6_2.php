<?php $select_value=$_POST['number'];
    echo $select_value;
   
if($_POST['number']==1){
echo '<form action="" method="post" enctype="multipart/form-data">';
for($i=1; $i<2; $i++){
echo '<label> module'.$i.':</label>
<input type="file" name="module'.$i.'"><br/>
<input type="submit" value="submit">
</form>';
}
    if(isset($_FILES["module"][$i])){
copy($_FILES["module"]["tmp_name"][$i],$_FILES["module"]["name"][$i]);
}
} 
else if($_POST['number']==2){
echo '<form action="" method="post" enctype="multipart/form-data">';
for($i=1; $i<3; $i++){
echo '<label> module'.$i.':</label>
<input type="file" name="module'.$i.'"><br/>
<input type="submit" value="submit"></br>
</form>';
}
}
else if($_POST['number']==3){
echo '<form action="" method="post" enctype="multipart/form-data">';
for($i=1; $i<4; $i++){
echo '<label> module'.$i.':</label></br>
<input type="file" name="module'.$i.'"><br/>
<input type="submit" value="submit"></br>
</form>';
}
}
else if($_POST['number']==4){
echo '<form action="" method="post" enctype="multipart/form-data">';
for($i=1; $i<5; $i++){
echo '<label> module'.$i.':</label></br>
<input type="file" name="module'.$i.'"><br/>
<input type="submit" value="submit"></br>
</form>';
if(isset($_FILES["module"][$i])){
copy($_FILES["module"]["tmp_name"][$i],$_FILES["module"]["name"][$i]);}
}
} 

    
?>