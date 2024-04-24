<?php
    $path = '../..';
    $title = "Ownership Permissions";

    include ($path . "/assets/includes/header.php");

?>
    <div class="content">
        <div class="section">
            <h2 class="hd" id="red">Ownership</h2>
                <p class="pg">File ownership is an essential component in UNIX because it provides a secure method for storing files. Additionally, the file ownership permissions will affect whether your users will be able to access your files, especially for web design. <br> <br>
                Permissions are divided into three categories which include owner, group, and other. The owner’s permissions determine what actions the owner of the file can perform of the file. Next, the group’s permissions determine what actions a user can perform on the file as long as they belong to that group. Finally, the other permissions specify which permissions all other users can perform on the file.</p>
        </div>
        <div class="section">
            <h2 class="hd"id="red">What are permissions?</h2>
                <p class="pg">The permissions that UNIX allows you to grant to owners, groups, and other users are read, write, and execute. For files, read permissions grant the users the capability to view the contents of the file, write permissions grant the users the capability to edit or remove content from the file, and execute permissions allow users to run the file as a program.
                <br><br>This differs slightly when assigning permissions to a directory. The read permissions allow users to look at filenames within the directory and write permissions allow users to add or delete files from the directory. However, the primary difference is the execute permissions. While having to execute permissions may not make sense, these permissions allow users to have the ability to traverse the directory.</p>
        </div>
        <div class="section">
            <h2 class="hd"id="red">How can I check my file's permissions?</h2>
                <div class="pg">
                    <p>The “ls -l” command displays a long listing of files within the current directory the user is located in. 
                        Amongst other information, this command displays the permissions associated with a file or directory in the first column.</p>
                    
                    <div class = "imageContainer">
                    <img src="<?php echo($path);?>/assets/images/permissions_image.png" alt="ls -l command output">
                    </div>
                    
                    <p>The first character, which is either denoted by a “d” or by a “-”, tells the user whether or not that element of the long listing is a directory. If a “d” is the first character, that means that element of the long listing is a directory and if a “-” is displayed, that indicates that the element of the long listing is a file. When looking at the example above, this indicates that the first element in the list is a directory and the second element is a file.
                    <br><br>The next 3 characters (2-4) represent the permissions for the file’s owner. Up to three different characters can be displayed here such as “r” which represents the read permission, “w” which represents the write permission, and “x” which represents the execute permission. Looking at “test_file” in the example provided above, this indicates that the owner has read, written, and execute permissions.
                    <br><br>The second group of three characters (5-7) represents the permissions for the group. Again, these characters can be filled with the read, write, or execution permissions, however, a majority of the time you will see “-” which represents that the group or user does not have specific permission. For “test_file” we see that the group permissions are set to “r-x” which indicates that the users within a specific group only have permission to read and execute the file.
                    <br><br>Finally, the last group of characters (8-10) represents the permissions for all other users. In this case, “test_file” has “r-x” which indicates that all other users have the same permissions as users within a group. These permissions are to read and execute the file.</p>
                </div>
        </div>
        <div class="section">
            <h2 class="hd"id="red">How do I change my file's permissions?</h2>
                <div class="pg">
                        <div class = "imageContainer">
                        <img src="<?php echo($path);?>/assets/images/permissions_table.jpg" alt="ls -l command output">
                        </div>
                    <p>
                        The “chmod” command allows you to change permissions for a file or directory. Although there are two methods for using the “chmod” 
                        command, most users typically use this command with absolute permissions. Each permission is assigned a value and the total for each set of 
                        permissions provides a number for that set. As seen in the table above, giving the owner of the file a 7 would indicate that they have read, 
                        write, and execute privileges because you are assigning them the read permission (4) plus the write permission (2) plus the read permission (1)
                        in order to give them all permissions (7). When using the “chmod” command with absolute values you must enter three values with 
                        it in order to declare owner, group, and other permissions.
                    </p>
                </div>
        </div>
    </div>
<?php
     include ($path . "/assets/includes/footer.php");
?>