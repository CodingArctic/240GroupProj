<?php
    $path = '../..';
    $title = "Directory Commands";

    include ($path . "/assets/includes/header.php");
   // Note from Colin ---- I gotta cook up some more css to deal with the h3's
   // Imma do that later
   // 4/17/23
   include ($path . "/assets/includes/commandaside.php");
?>
<div class="content">
    <div class="section">
    <h2 class="hd"id="yellow">LS</h2>
        <div class="pg">
            <h3>What is LS?</h3>
                <p>The “ls” command is extremely useful because it allows the user to view files and directories that are within the current directory the user is in. This command can also be used to view ownership permissions if the user uses “ls -l”. The ownership permissions for each file and directory will be the first element of each row.</p>

            <h3>Syntax</h3>

                <div class = "imageContainer">
                <img src="<?php echo($path);?>/assets/images/ls_syntax.png" alt="LS Syntax Image">
                </div>

                <p>As pictured above, the syntax for the “ls” command is “ls [Option] [File]”. This command has a vast amount of options which include “-l”, a long listing of files and directories, and “-a,  which displays files that begin with the dot notation. Additional options can be found on the manual page of the command. If a path name is entered in conjunction with this command, the output will display only information about the file or directory depending on the options that were specified.</p>
        </div>
    </div>
    <div class="section">
    <h2 class="hd"id="yellow">CHMOD</h2>
        <div class="pg">
            <h3>What is CHMOD?</h3>
                <p>“Chmod” allows users to change the permissions of a specified file or directory. Permissions include read, write, and execution which can be applied to the owner of the file, a group of users, and all other users. Additional options for this command can be found on the manual page for “chmod”.</p>

            <h3>Syntax</h3>

                <div class = "imageContainer">
                <img src="<?php echo($path);?>/assets/images/chmod_syntax.png" alt="CHMOD Syntax Image">
                </div>

                <p>In general, the “chmod” command’s syntax is “chmod [Option] [Permission] [File]”. Permissions can be assigned with “chmod” by using either symbolic or absolute mode. Typically, this command is used in the absolute mode because it is relatively simple and it allows users to change permissions of the owner, group, and others with three numbers. An example of this would be “chmod 755 test.txt”  which would set the owner permissions to read, write, and execute while the group and other permissions would just be read and execute.</p>
        </div>
    </div>
    <div class="section">
    <h2 class="hd"id="yellow">MKDIR</h2>
        <div class="pg">
            <h3>What is MKDIR?</h3>
                <p>The “mkdir” command allows the user to create a new directory. Some options for this command, which can be found on the manual page for “mkdir”, are “-m” and “-p”. “Mkdir -m” allows the user to set permissions for the directories for all users and “mkdir -p” creates parent directories as needed for the current directory the user is creating.</p>

            <h3>Syntax</h3>

                <div class = "imageContainer">
                <img src="<?php echo($path);?>/assets/images/mkdir_syntax.png" alt="MKDIR Syntax Image">
                </div>

                <p>Based on the image above, this command’s syntax is “mkdir [Options] [Directory Name]”. Additionally, this command can be created with a directory path and the new directory name which would put the new directory being made in the specified path given to it by the user.</p>
        </div>
    </div>
</div>
<!--content end-->
<?php
    include ($path . "/assets/includes/footer.php");
?>