<?php
    $path = '../..';
    $title = "Navigation Commands";

    include ($path . "/assets/includes/header.php");
   // Note from Colin ---- I gotta cook up some more css to deal with the h3's
   // Imma do that later
   // 4/17/23
   // 5/1/2023 2:04 am, Bruins lost how ever many hours go, I am currently dealing with the h3s (insert sunglasses emoji)
   include ($path . "/assets/includes/commandaside.php");
?>
<div class="content">
    <div class="section">
        <h2 class="hd"id="purple">CD</h2>
        <div class=pg>
            <h3>What is CD?</h3>
                <p>
                    The “cd” command, which stands for change directory, is one of the most essential commands when it comes to 
                    navigating a directory system. This command allows the user to change the working directory, which is the directory the user 
                    is working in, to a specified directory.
                </p>

            <h3>Syntax</h3>
                <p>
                    The syntax for the “cd” command is “cd [Directory Path]”. The directory path is very important especially if the user is 
                    trying to change their working directory to a directory that is located in their current working directory. This is because 
                    the user will not be able to access a directory outside their current working directory without a relative or absolute path. 
                    Additionally, the use of “cd ..” allows the user to traverse to the parent directory of their current working directory.
                </p>
        </div>
    </div>
    <div class="section">
        <h2 class="hd"id="purple">PWD</h2>
        <div class="pg">
            <h3>What is PWD?</h3>
                <p>
                    The “pwd” stands for print working directory. This command outputs the current directory in which the user is in.
                </p>

            <h3>Syntax</h3>
                <div class = "imageContainer">
                    <img src="<?php echo($path);?>/assets/images/pwd_syntax.png" alt="PWD Syntax Image">
                </div>
                <p>
                    As seen in the image above, the syntax for this command is “pwd [Option]”, however, most users will not apply 
                    options because the main use of this command is to display the current directory they are within. 
                </p>
        </div>
    </div>
    <div class="section">
        <h2 class="hd" id="purple">MV</h2>
        <div class="pg">
            <h3>What is MV?</h3>
                <p>
                    “Mv” is an important command because it allows the user to move a file to a specified directory on their system. 
                    Additionally, this command allows the user to change the name upon moving the file.
                </p>

            <h3>Syntax</h3>
                <div class = "imageContainer">
                    <img src="<?php echo($path);?>/assets/images/mv_syntax.png" alt="MV Syntax Image">
                </div>
                <p>
                    Typically, users will use the “mv” command with the syntax of  “mv [Filename] [Directory]”. However, this command also allows 
                    the user to change the name of a file if they use it with the “mv [Original Filename] [New Filename]”. Additionally, this 
                    command can be used with several options. As seen in the image above, the “-t” option allows the user to move all source files 
                    into a destination directory and the “-T” argument allows the user to treat the destination as a normal file.
                </p>
        </div>
    </div>
</div>


<?php
     include ($path . "/assets/includes/footer.php");

?>