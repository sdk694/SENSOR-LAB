<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- https://www.anurezapower.in/images/residential.jpg -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Sign Up</title>

  </head>  
  <body style="background-image: url('https://www.anurezapower.in/images/residential.jpg') ;background-repeat: no-repeat;">
        <div class="container col-8 " style="margin-top: 70px;" >
            <div class="card shadow bg-dark text-light" style="opacity: 0.9;">
                <h1 class="card-header  text-dark" style="background-color: rgb(255, 217, 0);"><span class="fa fa-user-plus"></span> Sign Up</h1>
                <div class="card-body">
                    <form class="needs-validation" action="includes/signup.php"  method="POST" novalidate>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" value="" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" >@</span>
                                  </div>
                                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                  <div class="invalid-feedback">
                                    Please choose a username.
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Password</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" >*</span>
                                  </div>
                                  <input type="password" class="form-control"id="pwd" name="pwd" placeholder="password" aria-describedby="inputGroupPrepend" required>
                                  <div class="invalid-feedback">
                                    Please choose a username.
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Email </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <div class="invalid-feedback">
                              Please provide a valid mail.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Employee ID</label>
                            <input type="text" class="form-control" id="empid" name="empid" placeholder="EMPID" required>
                            <div class="invalid-feedback">
                              Please provide a valid EMPID.
                            </div>
                          </div>
                        </div>  
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-lg btn-primary rounded-pill" name="submit" type="submit">Sign Up</button>
                      </form>
                      
                      <script>
                      // Example starter JavaScript for disabling form submissions if there are invalid fields
                      (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                          // Fetch all the forms we want to apply custom Bootstrap validation styles to
                          var forms = document.getElementsByClassName('needs-validation');
                          // Loop over them and prevent submission
                          var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();
                      </script>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>