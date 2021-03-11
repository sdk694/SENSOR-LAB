<?php 
    //Sessions: Last till browser is ON
    session_start();   

    $link = mysqli_connect("localhost","root","pwd","udemyfullstack"); 

    if(mysqli_connect_error()){
        die("Not connected to MySQL Database. Error! :("."<br>");
    }
    
    //If user presses logout, then all Sessions & Cookies destroyed
    if(array_key_exists("logout",$_GET)){
        unset($_SESSION);
        session_destroy();
        $_SESSION = array();
        setcookie("email","",time() - 60*60);
        $_COOKIE["email"]="";
    
    } //Else if user has not pressed logout, it takes it back to thw Logged In page!! wao! 
    else if ((array_key_exists("email",$_SESSION) AND $_SESSION["email"]) OR (array_key_exists("email",$_COOKIE) AND $_COOKIE["email"])){
        header("Location: 7BasicSignupLogin2.php");

    }

    $success="";
    $failure="";

    if(array_key_exists("email",$_POST) && array_key_exists("password",$_POST)){

        echo "<br>";

        if($_POST["email"] == ""){ //Checking if email is empty
            $failure = "<p>Email is required</p>";
        } else if ($_POST["password"] == ""){  //Checking if password is empty
            $failure = "<p>Password is required</p>";   
        } else {       
            
            //Sign Up
            if($_POST["signup"]==1){

                // Given password
                $password = $_POST["password"];

                // Validate password strength
                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);
                $number    = preg_match('@[0-9]@', $password);
                $specialChars = preg_match('@[^\w]@', $password);

                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || strlen($password) > 20) {
                    $failure = 'Password should be at least 8 characters & atmost 20 characters in length and should include at least one upper case letter, one number and one special character.';
                }
                else {
                    
                    //echo 'Strong password.';
 
                    //Checking if email is already present in DB
                    $checkQuery = "SELECT id FROM secretdiary WHERE email ='".mysqli_real_escape_string($link,$_POST["email"])."'";
                    $result1 = mysqli_query($link,$checkQuery);

                    //Checks if there are rows where email is repeated
                    if( mysqli_num_rows($result1) == 0){    

                        //Using password_hash
                        $_POST["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);

                        $insertQuery = "INSERT INTO secretdiary (email,password) VALUES ('".mysqli_real_escape_string($link,$_POST["email"])."','".mysqli_real_escape_string($link,$_POST["password"])."')"; 
    
                        if (mysqli_query($link,$insertQuery)){
                            $success = "Sign up Complete!";  //This is overridden by Sessions

                            $_SESSION["email"] = $_POST["email"];

                            if($_POST["stayloggedin"] == '1'){
                                
                                setcookie("email",$_POST["email"],time()+60*60*24*365);
                            
                            }
                            header("Location: 7BasicSignupLogin2.php");
    
                        } else {
                            $failure = "ERROR signing up!";
                        }
                    } else {
                        $failure = "Email already exists in the DB. Try with a new email or Sign in with the earlier one!";
                    }
                }
            }    
            
            //Sign In
            else {
                    
                $checkQuery2 = "SELECT * FROM secretdiary WHERE email ='".mysqli_real_escape_string($link,$_POST["email"])."'";    
                
                $result2 = mysqli_query($link,$checkQuery2);
                $row = mysqli_fetch_array($result2);
                
                //print_r ($row);

                if(array_key_exists("email",$row)){
                    

                    if(password_verify($_POST["password"],$row["password"])){
                        $success = "Username & Password correct";
                        $_SESSION["email"] = $_POST["email"];

                        if($_POST["stayloggedin"] == '1'){
                            
                            setcookie("email",$_POST["email"],time()+60*60*24*365);
                        
                        }
                        header("Location: 7BasicSignupLogin2.php");

                    } else {
                        $failure = "Wrong Username or Password";
                    }
                }
            
            }
        
        }
    }

?>


<form action="" method="post">

    <input type="email" name="email" placeholder="Your Email">
    <input type="password" name="password" placeholder="Your password">
    <input type="checkbox" name="stayloggedin" value=1>
    <input type="hidden" name="signup" value=1>
    <input type="submit" name="submit" value="Sign Up!">

</form>

<form action="" method="post">

    <input type="email" name="email" placeholder="Your Email">
    <input type="password" name="password" placeholder="Your password">
    <input type="checkbox" name="stayloggedin" value=1>
    <input type="hidden" name="signup" value=0>
    <input type="submit" name="submit" value="Login!">

</form>

<div id="error">
    <?php
        if($success){
            echo  $success;
        } 
        if($failure){
            echo  $failure;
        }            
    ?>

</div>