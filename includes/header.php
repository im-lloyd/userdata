<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Default Title"; ?></title>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <ul class="nav">
                <li class="navlink">
                    <a href="../views/index.php" class="brand">
                        <img src="../assets/icons/brand-icon.png" alt="brand icon">
                        <span>Synergy</span>
                    </a>
                </li>
                <div class="nav-center">
                    <li class="navlink">
                        <a href="">Products</a>
                    </li>
                    <li class="navlink">
                        <a href="">Solutions</a>
                    </li>
                    <li class="navlink">
                        <a href="">Integrations</a>
                    </li>
                    <li class="navlink">
                        <a href="">Resources</a>
                    </li>
                </div>
                <li class="navlink">
                    <a href="../views/login.php" class="btn-login">Login</a>
                </li>
            </ul>
        </nav>