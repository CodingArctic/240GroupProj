<?php
    $path = '../..';
    $title = "File System Commands";

    include ($path . "/assets/includes/header.php");
   // Note from Colin ---- I gotta cook up some more css to deal with the h3's
   // Imma do that later
   // 4/17/23
   include ($path . "/assets/includes/commandaside.php");
?>
<div class="content">
    <div class="section">
        <h2 class="hd"id="orange">CP</h2>
        <div class="pg">
            <h3>What is CP?</h3>
                <p>The “cp” command has two primary functions. The first function is to copy a file or a directory into the same directory or a
                     different directory location. Furthermore, this command allows the user to rename a file or 
                     directory if the syntax is correct.
                </p>

            <h3>Syntax</h3>

                <div class = "imageContainer">
                <img src="<?php echo($path);?>/assets/images/cp_syntax.png" alt="CP Syntax Image">
                </div>
                
                <p>
                    As seen in the second line of the image above, the main syntax for this command is “cp [Option] [Source] [Directory]”.
                    In this case, the source refers to the file or directory the user is trying to copy and the destination is the directory that 
                    the user is attempting to copy the file to. To rename a file, the user must use “cp [Source Filename] [New Filename]”. 
                    This syntax copies the contents of the file and changes the name of the copied file to the new filename.
                </p>
        </div>
    </div>
    <div class="section">
        <h2 class="hd"id="orange">RM</h2>
            <div class="pg">
                <h3>What is RM?</h3>
                    <p>“Rm” can be a dangerous command if the user is not careful. This is because the command will remove, 
                        or in other words delete, a specified file or directory without prompting the user whether or not they are sure they want to 
                        delete the file or directory. The file or directory that the user is removing is permanently deleted from the system so this 
                        command should be used only when a file or directory is no longer needed for the application to function.</p>

                <h3>Syntax</h3>

                    <div class = "imageContainer">
                    <img src="<?php echo($path);?>/assets/images/rm_syntax.png" alt="RM Syntax Image">
                    </div>
                    
                    <p>
                        As seen in the image above, the syntax for “rm” is “rm [Option] [Filename or Directory Name]”. However,
                        if the user uses the “-i” option with this command it will prompt them to ensure whether or not they would like to 
                        delete the specified file or directory. If this command is used with the “-r” option, it will delete a directory along 
                        with the contents of a said directory recursively. 
                    </p>
            </div>
    </div>
    <div class="section">
        <h2 class="hd"id="orange">MAN</h2>
        <div class="pg">
            <h3>What is MAN?</h3>
                <p>
                    “Man” is the most important command for every user who is working on a Unix system. This command allows the user to 
                    find the functionality, syntax, and options for every Unix command by displaying the manual page for the command the 
                    user specifies.
                </p>

            <h3>Syntax</h3>

                <div class = "imageContainer">
                <img src="<?php echo($path);?>/assets/images/man_syntax.png" alt="MAN Syntax Image">
                </div>

                <p>
                    Although the “man” command can be used in various ways if the user includes any of the options listed above, 
                    the primary syntax of this command is “man [Command Name]”. This presents the manual page of the specified command to the 
                    user. To exit the manual page for the command the user simply has to press “q” and it will return them to the terminal.
                </p>
        </div>
    </div>
</div>


<?php
    include ($path . "/assets/includes/footer.php");

?>