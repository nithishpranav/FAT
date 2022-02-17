<?php

$color = filter_input(INPUT_POST, 'sub', FILTER_SANITIZE_STRING);

?>

<?php if ($color) : ?>
    <p>You selected <span style="color:<?php echo $color ?>"><?php echo $color ?></span></p>
<?php else : ?>
    <p>You did not select any color</p>
<?php endif ?>