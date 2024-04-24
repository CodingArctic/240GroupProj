<?php
    $path = '.';
    $title = "Homepage";

    include ($path . "/assets/includes/header.php");

?>

<div class="content">
    <div class="section">
        <h2 class="hd" id="green">What is UNIX</h2>
            <p class="pg">If you work with the Web long enough, chances are that you will have to communicate with a UNIX machine. This is in part due to the fact that UNIX is a multi-user operating system that runs on web servers. UNIX is essential when it comes to web development because it is run on a wide variety of digital architectures such as web servers, mainframes, and supercomputers.</p>
    </div>

    <div class="section">
        <h2 class="hd" id="red">File Systems</h2>
            <p class="pg">In UNIX operating systems, file systems are a logical method for organizing and storing large amounts of information in order to make it manageable for users. All data is organized into files, directories, and a tree-like structure called a file system. All files are organized into a multi-level hierarchy structure known as a directory tree. </p>
    </div>      
    
    <div class="section">
        <h2 class="hd" id="blue">Ownership Permissions</h2>
            <p class="pg">File ownership is an essential part of UNIX, as it provides a secure method for storing files and allows users to access them. Permissions are divided into three categories: owner, group, and other. Owner's permissions determine what actions the owner of the file can perform, groups determine what actions a user can perform, and other permissions specify which permissions all other users can perform on the file.</p>
    </div>
    
    <div class="section">
        <h2 class="hd" id="purple">Navigation Commands</h2>
            <p class="pg">Navigation commands are some of the most common commands used in a UNIX system because it allows the end user to traverse through the file system. Essential navigation commands include “cd”, “pwd”, and “mv”. These commands allow users to change directories, print the directory they are located in, and move files from one directory to another respectively.</p>
    </div>

    <div class="section">        
        <h2 class="hd" id="orange">File System Commands</h2>
            <p class="pg">File system commands, such as “cp”, “rm”, and “man”, are useful for managing files, directories, and a file system as a whole. There are a vast amount of commands so if a user is ever having trouble with a common one, use the “man” command in conjunction with the command that is causing issues.</p>
    </div>

    <div class="section">            
        <h2 class="hd" id="yellow">Directory Commands</h2>
            <p class="pg">Directory commands allow users to manipulate their directories within a file system. Additionally, some directory commands allow users to change permissions for files and directories. This ensures that only authorized users and processes can access specific files and directories.</p>
    </div>
</div>

<?php
    include ($path . "/assets/includes/footer.php");

?>