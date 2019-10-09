<?php include 'header.php'?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <img src="images/signup.jpg" width="840" height="635">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <form action="login_handler.php" method="post">
                    <div class="form-group">
                        <h1><u>ALREADY HAVE AN ACCOUNT?</u></h1>

                        <hr>
                        <div class="form-group">
                            <label for="email">EMAIL:</label>
                            <?php
                            if(isset($_GET['email_err'])){
                                echo "<br>";
                                echo "<span style='text-align: center' class='alert-danger'>Email is required</span>";
                            }
                            ?>
                            <input type="text" class="form-control" placeholder="Enter your Email" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="psw">PASSWORD:</label>
                            <?php
                            if(isset($_GET['password_1_err'])){
                                echo "<br>";
                                echo "<span style='text-align: center' class='alert-danger'>Password is required</span>";
                            }
                            ?>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password_1" id="psw" required>
                        </div>

                        <p>We love to see you come again</p>

                        <div class="clearfix">
                            <button name="login" type="submit" class="login">LOG IN</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>

<?php include 'footer.php'?>