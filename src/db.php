<?php
function connectMysql(string $dsn,string $dbuser,string $dbpass){
    try{
        $db = new PDO($dsn, $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die( $e->getMessage());
        
    }
    return $db;
}
/**
 * authenticarion function
 * @param string $db
 * @param string $email
 * @param string $password
 * @return boolean
 * 
 *  */    
function auth(string $db, string $email, string $password):bool{
    var_dump($db);
    die;
    $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
    $stmt->execute([':email'=>$email]);
    $count=$stmt->rowCount();
    $row=$stmt->fetchAll();
      
    if($stmt->rowCount()==1){
        $user=$stmt->fetchAll()[0];
        if(password_verify($password,$user->password)){
            //return true: login correcto
            $_SESSION['user']=$user;
            header('location:?url=dashboard');
            return true;
        }
    }
    return false;
    /*
    if($count==1){       
        $user=$row[0];
        $res=password_verify($pass,$user['passw']);
       
        if ($res){
        $_SESSION['uname']=$user['uname'];
        $_SESSION['email']=$user['email'];
   
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }*/
}