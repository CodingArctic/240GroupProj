<?php 
    $path = '../..';
    $title = "Quiz 1: Structure & Permissions";

    include ($path . "/assets/includes/header.php");
?>
<div class="content">
    <div class="section">
        <br><br>
        <h2 class="hd">Quiz 1</h2>
        <div class="pg">
            <div id="quizBody"></div>
            <br> <button id="submit">Submit</button>
            <div id="results"></div>
        </div>
    </div>
</div>
<script src="<?php echo($path);?>/assets/scripts/quiz1.js"></script>


<?php
    include ($path . "/assets/includes/footer.php");
?>