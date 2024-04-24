<?php
    $path = '../..';
    $title = "Filesystems";

    include ($path . "/assets/includes/header.php");

?>
    <div class="content">
        <div class="section">
            <h2 class="hd" id="red">What is a File System?</h2>
                <div class="pg">
                <p class="pg">A UNIX file system is a logical method for organizing and storing large amounts of information in order to make it manageable for a user. There are several important features that a UNIX file system has. All data within UNIX is organized into files, which are the smallest units in that information is stored in. All files are organized into directories and the directories are organized into a tree-like structure which is called a file system. Finally, all files within a UNIX system are organized into a multi-level hierarchy structure which is known as a directory tree. </p>
                
                <div class = "imageContainer">
                    <img src="<?php echo($path);?>/assets/images/file_system_image_mobile.png" alt="Directory Tree Image">
                </div>
                </div>
        </div>
        <div class="section">
            <h2 class="hd" id="red">Hierarchy</h2>
                <p class="pg">At the very top of the file system is a directory called “root”, often represented by “/”, which contains all other directories, subdirectories, and files on the system. Although all other directories serve very important purposes, the home directory can be viewed as a personal working space for all users except for the root user. It is important to note that there is a separate directory for each user so their personal working spaces do not interact with each other.</p>`
        <div>
    </div>
<?php
    include ($path . "/assets/includes/footer.php");

?>