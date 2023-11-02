<?php

$sn="localhost";
$un="root";
$pss="";
$db="trial";

$conn= mysqli_connect($sn,$un,$pss,$db);
if($conn){
    echo "Successfull";

}
else{
    echo "Unsuccesfull";
}
    
mysqli_query($conn,"insert into `done`(name,class,gender) values ('akash','12v','male')");
?>