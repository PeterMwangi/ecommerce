<?php include "header.php";?>



<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            <img src="images/signup.jpg" width="840" height="635">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="signup_handler.php" method="post">



                <div class="form-group">
                        <h1><u>CREATE AN ACCOUNT</u></h1>
                        <hr>
                        <div class="form-group">
                            <label for="firstname">FIRST NAME:</label>
                            <?php
                            if(isset($_GET['firstname_err'])){
                                echo "<br>";
                                echo "<h3 style='text-align: center' class='alert-danger'>First name is required</h3>";
                            }
                            ?>
                            <input type="text" class="form-control" placeholder="Enter First Name"   name="firstname" id="firstname" required>
                        </div>

                        <div class="form-group">
                            <label for="lastname">LAST NAME:</label>
                            <?php
                            if(isset($_GET['lastname_err'])){
                                echo "<br>";
                                echo "<h3 style='text-align: center' class='alert-danger'>Last name is required</h3>";
                            }
                            ?>
                            <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" required>
                        </div>

                        <div class="form-group">
                            <label for="email">EMAIL:</label>
                            <?php
                            if(isset($_GET['email_err'])){
                                echo "<br>";
                                echo "<h3 style='text-align: center' class='alert-danger'>Email is required</h3>";
                            }
                            ?>
                            <input type="text" class="form-control" placeholder="Enter your Email" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="psw">PASSWORD:</label>
                            <?php
                            if(isset($_GET['password_1_err'])){
                                echo "<br>";
                                echo "<h3 style='text-align: center' class='alert-danger'> Password_1 is required</h3>";
                            }
                            ?>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password_1" id="psw" required>
                        </div>

                        <div class="form-group">
                            <label for="psw-repeat">CONFIRM PASSWORD:</label>
                            <?php
                            if(isset($_GET['password_2_err'])){
                                echo "<br>";
                                echo "<h3 style='text-align: center' class='alert-danger'> Password_2 required</h3>";
                            }
                            ?>
                            <input type="password" class="form-control" class="form-control" placeholder="Confirm Password" name="password_2" id="psw-repeat" required>
                        </div>

                        <label>
                            <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                        <p>Creating an account means you agree our <a href="#" style="color:dodgerblue">Terms & Conditions</a>.</p>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" name="signup" class="signup">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php include "footer.php"?>