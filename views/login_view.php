<?php
$pageTitle = "Login Page"; // Set the dynamic title
include '../includes/header.php';
?>

    <div class="login-container">
        <div class="login-content">
            <div class="login-form">
                <h2>Login</h2>
                <form action="" method="POST">
                    <div class="form-group login">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>    
                    </div>
                    <div class="form-group login">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>      
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-login">Login</button>
                    </div>
                    <div class="form-group ">
                        <p>Don't have an account? 
                            <a href="../views/register_view.php">Register</a>
                        </p>      
                    </div>
                </form>
            </div>
            <div class="login-image">
                <!-- <img src="../assets/images/login-image.png" alt="login image"> -->
            </div>
        </div>
    </div>

<?php include "../includes/footer.php" ?>