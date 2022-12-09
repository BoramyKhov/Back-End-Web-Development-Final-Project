
<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="localhost";
 $username="root";
 $password="";
 $databasename="bakery";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);
 $email=$_POST['email'];
 $pass=$_POST['password'];


 $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS); 


  $query = $pdo->prepare("SELECT salt FROM login WHERE username=:email");
  $query->bindValue(':user', $_POST['email']); 
  $query->execute();
  $salt = $query->fetchColumn();


 $email=$_POST['email'];
 $pass=md5($salt.$_POST['password']);

 $select_data=mysql_query("SELECT * FROM login WHERE username='$email' AND password='$pass'");
 if($row=mysql_fetch_array($select_data))
 {
  $_SESSION['email']=$row['email'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>