<?php

    session_start();
    if(array_key_exists("email",$_COOKIE)){

        $_SESSION["email"] = $_COOKIE["email"];
        //echo 'Logged In user email is: '.$_COOKIE["email"];
        
    }

    if(array_key_exists("email",$_SESSION)){

        //echo "<p>Logged In! <a href ='8SecretDiary-SignupLoginPage.php?logout=1'>Log out</a></p>";

        include ("8SQLconnection.php");

        $PrevContentquery = "SELECT diarycontent FROM secretdiary WHERE email= '".mysqli_real_escape_string($link,$_SESSION["email"])."'";
 
        $row = mysqli_fetch_array (mysqli_query($link,$PrevContentquery));

        $diaryContent = $row["diarycontent"];
    } else{

     //   header("Location: 8SecretDiary-SignupLoginPage.php");

    }
?>

<html lang="en">
    <head>
        <title>Secret Diary Project</title>
        <bootstrapReq>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS, jQuery, PopperJS, Bootstrap JS - Cloud based packages -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            
            <!-- OR - Local packages -->
            <!-- <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
            <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
            <script src="popper.min.js"></script>
            <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script> -->
        </bootstrapReq>

        <style>
            html { 
                background: url("beachshowcase.jpg") no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            body{
                background: none;
            }
            
            #diary {
                text-align:center;
                height:100%;
                width:100%;
                  
            }

 
        </style>

    </head>

    <body>
 
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <a class="navbar-brand" href="#">Secret Diary Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="8SecretDiary-SignupLoginPage.php?logout=1" class= "btn btn-danger toggleForm float-left" role="button"><span id="toggleFormButton">Logout</span></a> 
                </form>
            </div>
        </nav>

        <div class="container-fluid">            
            <textarea name="diary" id="diary" class="form-control" style="text-align:left; overflow:auto;" placeholder="Enter any of your random thoughts here... :) It will be automatically saved in the database!"><?php echo  $diaryContent; ?></textarea>
        </div>   
        
        <script type="text/javascript">
 
            $('#diary').bind('input propertychange', function() {
                
                $.ajax({
                    method: "POST",
                    url: "8updateDatabase.php",
                    data: { content: $("#diary").val() }
                }) 

                // .done(function( msg ) {
                //     alert( "Data Saved: " + msg );
                // });
            });
        
        </script>

    </body>
</html>