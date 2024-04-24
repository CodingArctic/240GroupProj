<?php
    $path = '../..';
    $title = "Quiz 2: Useful Commands";

    include ($path . "/assets/includes/header.php");
?>
<div class="content">
    <div class="section">
        <br><br>
        <h2 class="hd">Quiz 2</h2>
        <div class="pg">
            <div id="quizBody"></div>
            <br> <button id="submit">Submit</button>
            <div id="results"></div>
        </div>
    </div>
</div>
<script src="<?php echo($path);?>/assets/scripts/quiz2.js"></script>


<?php
    include ($path . "/assets/includes/footer.php");
?>