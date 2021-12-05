<div class="container-fluid">
    
    <?php
        $User = new User($Conn);
        if($_POST) {
            if($_POST['reg']) {
                //Registered form submitted
                if(!$_POST['email']) {
                    $error = "Email not set";
                }elseif(!$_POST['password']) {
                    $error = "Password not set";
                }elseif(!$_POST['password_confirm']) {
                    $error = "Confirm password not set";
                }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $error="Email address is not valid";
                }elseif($_POST['password'] !== $_POST['password_confirm']) {
                    $error = "Password and Confirm Password do not match";
                }elseif(strlen($_POST['password'])<8) {
                    $error = "Password must be at least 8 characters in length";
                }
                if($error) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php
                    }else{
                        //Register User
                        $attempt = $User->createUser($_POST);
            
                        if($attempt) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                User created - Please Login!
                            </div>
                        <?php
                        }else{
                            ?>
                            <div class="alert alert-danger" role="alert">
                                An error occurred, please try again later.
                            </div>
                            <?php
                        }
                    }
                }
            
            
            }else if($_POST['login']) {
                //Login form submitted
                if(!$_POST['email']) {
                    $error = "Email not set";
                }elseif(!$_POST['password']) {
                    $error = "Password not set";
                }elseif(!$_POST['password_confirm']) {
                    $error = "Confirm password not set";
                }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $error="Email address is not valid";
                }elseif(strlen($_POST['password'])<8) {
                    $error = "Password must be at least 8 characters in length";
                }
                if($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                    <?php
                }else{
                    //Attempt to Login User
                    $user_data = $User->loginUser($_POST);
                    if($user_data) {
                        // Credentials correct
                        $_SESSION['is_loggedin'] = true;
                        $_SESSION['user_data'] = $user_data;
                        ?>
                            <div class="alert alert-success" role="alert">
                                You have been logged in, welcome back!
                            </div>
                        <?php
                    }else{
                        // Credentials incorrect
                        ?>
                         <div class="alert alert-danger" role="alert">
                            Login credentials are incorrect.
                        </div>
                    <?php
                    }
                }
            }
        ?>
        <h1 class="mb-4 pb-2">Login or Register</h1>
                <div class="row">
                    <div class="col">
                        <form id="login-form" method="post" action="">
                            <div class="form-group">
                                <label for="login-email">Email address</label>
                                <input type="email" class="form-control" id="login-email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="login_password">Password</label>
                                <input type="password" class="form-control" id="login_password" name="password">
                            </div>
                            <button type="submit" name="login" value="1" class="btn btn-tailsandtrails">Login</button>
                        </form>
                    </div>
                    <div class="col">
                        <form id="registration-form" method="post" action="">
                            <div class="form-group">
                                <label for="reg-email">Email address</label>
                                <input type="email" class="form-control" id="reg-email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="reg_password">Password</label>
                                <input type="password" class="form-control" id="reg_password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="reg_password_confirm">Confirm Password</label>
                                <input type="password" class="form-control" id="reg_password_confirm" name="password_confirm">
                            </div>
                            <button type="submit" name="reg" value="1" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>    
