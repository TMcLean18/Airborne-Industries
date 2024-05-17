<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confpass = $_POST["confpass"];
    if($password!=$confpass)
        echo "Passwords do not match";
    try{
        require_once "dbinc.php";
        $query = "INSERT INTO users(email,pwd) VALUES(?,?);";

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