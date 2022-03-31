<!-- php de insert -->
<?php 
$host = "localhost";
$user ="root";
$pw = "";
$ndb = "crudnawal";
$con = mysqli_connect($host,$user,$pw,$ndb);
if($con){
    echo "connected"."<hr>";

}
else{
    echo " NO connected" ;

}