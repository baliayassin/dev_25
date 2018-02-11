
<?php
session_start();

 define("DBHOST" , "182.50.133.55");
define("DBUSER" , "auxstudDB7c");
define("DBPASS" , "auxstud7cDB1!");
define("DBNAME" , "auxstudDB7c");
$flag=1;
$username="";
$password;
$search="";
$connection = mysqli_connect(DBHOST, DBUSER , DBPASS , DBNAME);


//// tbl_users_242
//testing connection success

if(mysqli_connect_errno()) {
  die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}

if (isset($_POST['connect'])) {
  
 

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
 // To protect MySQL injection for Security purpose
$username=$_POST['username'];
$password=$_POST['password'];



$query=mysqli_query($connection,"SELECT * FROM tbl_users_242 WHERE
username='$username' AND password='$password'");
$rows=mysqli_num_rows($query);

//if($rows==1){

  if($rows==1){ 
  
    if($username="levi"){

      header("Location:levi.html");
    }

    
}
else{
   $error="Username or password is invalid";
  }
       
}

} 


/*

if (!$connection) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

mysqli_close($connection);
*/
 // Starting Session

/*
if($flag){

  $query="INSERT INTO  tbl_users_242_groups (groupname,total) VALUES('המהנדסים','130')";
  mysqli_query($connection,$query);

  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('לולו','1654')";
  mysqli_query($connection,$query);

  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('התותחים','2543')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('רונאלדו','659')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('ראמוס','6956')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('אלקס','4879')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('פופו','3989')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('קארלוס','2123')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('הדדולים','1465')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('המתכנתים','978')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('קרוס','567')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('האלופים','978')";
  mysqli_query($connection,$query);
  $query="INSERT INTO tbl_users_242_groups (groupname,total) VALUES('בליא','10923')";
  mysqli_query($connection,$query);


$flag=0;


}

*/

$query="SELECT * FROM tbl_users_242_groups ";
 
$results=mysqli_query($connection,$query);
if(!$results){

  die("db query failed");
}

//header("Location:index.php");




mysqli_close($connection);

?>