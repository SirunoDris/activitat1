<?php
function connectMysql(string $dsn,string $dbuser,string $dbpass){
    try{
        $db = new PDO($dsn, $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

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
    

function auth($db, string $email, string $password):bool{
    //echo "Hola";
    //var_dump($db);
    //die;
    $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
    
    $rest = $stmt->execute([':email'=>$email]);
    
    $count=$stmt->rowCount();
    if ($count==1){
        var_dump($stmt->fetchAll());
        $user=$stmt->fetchAll()[0];
        
        return true;
        header('location:?url=dashboard');
    }
    
    if($stmt->rowCount()== null){
       
        echo"dewijfowejfojwefj";
        //coge la primera fila de la consulta
        if(password_verify($password,$user->password)){
            //return true: login correcto
            $_SESSION['user']=$user; //genera un objeto. La variable de sesion de usuario en db.php hemos dicho que devuelve object
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