<?php

include('FormClass.php');

$frm = new FormClass();

$formStart = $frm->startForm('<?php echo $_SERVER[\'PHP_SELF\']; ?>', 'post') .
    PHP_EOL .
    $frm->startTag('p') . PHP_EOL .
    $frm->addLabelFor('City: ' ) .
    $frm->addInput('text', 'city', '') .
    $frm->endTag() . PHP_EOL .
    $frm->addInput('submit', 'submit', 'submit') .
    $frm->endForm();

echo $formStart;