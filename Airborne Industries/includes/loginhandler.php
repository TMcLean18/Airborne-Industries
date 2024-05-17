<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $description = $_POST["description"];
   
    try{
        require_once "dbinc.php";
        $query = "SELECT * FROM users WHERE email='?' & pwd='?'";
        
        $stmt =$pdo->prepare($query);
        $stmt->execute([$name,$email,$description]);
        
        $pdo = null;
        $stmt = null;
        die();
        header("Location: ../index.php");
    }
    catch(PDOException $e){
        die("Query failed: ". $e->getMessage());
        
    }
}
else{
    header("Location: ../index.php");
}