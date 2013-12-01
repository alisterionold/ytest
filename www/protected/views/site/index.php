

<?php $this->pageTitle = Yii::app()->name; ?>


<?php if (empty($testProcess)) { ?>
    <div class="flash-notice" id="test-info"><?php echo $testType; ?></div>
<?php } ?>
<div id="main-content">

    <?php
    if (!empty($testProcess)) {
        $this->renderPartial('test', array(
            "qResult" => $qResult,
            "question_number" => $question_number,
            "max_question" => $max_question
        ));
    } else {
        $this->renderPartial('input-data', array(
            "language" => 0,
            "languages" => $languages,
        ));
    }
    ?>

    <div style="" id="errors_display"></div>

</div>
<?php if (!empty($testProcess)) { ?>
    <div id="question_list" class="">
    </div>
    <?php
}?>