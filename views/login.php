<?php
$pageTitle = "Landing Page"; // Set the dynamic title
include '../includes/header.php';
?>
    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1 class="login-text">Login</h1>
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
            <div class="hero-image">
                <img src="../assets/images/image-login.png" alt="hero image">
            </div>
        </div>
    </section>

<?php include "../includes/footer.php" ?>