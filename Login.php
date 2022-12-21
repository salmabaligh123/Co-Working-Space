<html>
<head>
    <?php include "header.php" ?>
</head>

<body>
    <!-- Start Login Area -->
    <div class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2>Login</h2>

                <form>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label>Email or Phone</label>
                        <input type="text" class="form-control" placeholder="Email or phone">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password">
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Remember me</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                            <a href="#" class="lost-your-password">Forgot your password?</a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">Don't have an account? 
                            <a href="SignUp.php" class="signup">SignUp </a>
                        </div>

                    </div>

                    <button type="submit" class="default-btn">Login <span></span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
    <?php include "footer.php" ?>
</body>

</html>
