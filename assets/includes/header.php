<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo($path);?>/assets/styles/styles.css">
    <script src="<?php echo($path);?>/assets/scripts/script.js"></script>
    <title><?php echo $title; ?>: The HitchHiker's Guide to UNix</title>
</head>
<body>
    <header class="header">
        <img class='logo' src="<?php echo($path);?>/assets/images/dice.png" alt="Dice Logo">
        <h1><?php echo $title;  ?></h1>
    </header>
    <!-- Main Navigation -->
    <nav class="navbar"> 
        <button onclick="dropdownMenu()" class="dropbtn">Menu</button>
        <div id="dropdown-content">
            <ul class="nav"> 
                <li><a href = "<?php echo($path);?>/index.php">Homepage</a></li>
                <li><a href = "<?php echo($path);?>/pages/whatIsUnix.php">What is Unix</a></li>
                <li><a href = "<?php echo($path);?>/pages/filesystems/filesystems.php">File Systems</a>
                    <ul class="submenu">
                        <li><a href = "<?php echo($path);?>/pages/filesystems/ownershipPermissions.php">Ownership Permissions</a></li>
                    </ul>
                </li>
                <li>Commands
                    <ul class="submenu">
                        <li><a href = "<?php echo($path);?>/pages/commands/navCommands.php">Navigation</a></li>
                        <li><a href = "<?php echo($path);?>/pages/commands/fileSysCommands.php">File System</a></li>
                        <li><a href = "<?php echo($path);?>/pages/commands/directoryCommands.php">Directory</a></li>
                    </ul>
                </li>
                <li>Quizzes
                    <ul class="submenu">
                        <li><a href = "<?php echo($path);?>/pages/quizzes/quiz1.php">Structure and Permissions</a></li>
                        <li><a href = "<?php echo($path);?>/pages/quizzes/quiz2.php">Useful Commands</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Page Content -->