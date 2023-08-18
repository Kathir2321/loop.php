<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
for($i=0;$i<10;$i++){
    echo $i;
}
//while
echo "<br>---------while------<br>";
$j=1;
while($j<10){
    echo$j;
    $j++;
}
echo "<br>---------dowhile------<br>";
$k=1;

do{
    echo $k;
    $k++;
}while($k<10);

echo "<br>---------foreach--------<br>";

$data_arr=["green","red","blue"];

foreach($data_arr as $data=>$val){

  echo $data."--".$val."<br>";
}


?>