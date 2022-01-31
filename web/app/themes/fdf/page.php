<?php
use functions\customposts\ExamplePost;

$exampleposts = ExamplePost::findBy(
    [
        'orderby' => 'date',
        'post_type' => 'reservation',
    ],
    $args['limit'] ?? null
);
?>
<div class="container">
    <h1>
        Fietsen
    </h1>
    <?php foreach ($exampleposts as $example) { ?>
        <div>
            <h2>
                <?php echo $example->getTitle(); ?>
            </h2>
            <p>
                <?php echo $example->getDescription(); ?>
            </p>
            <p>
                Prijs: <?php echo $example->getPrice(); ?>
            </p>
        </div>
    <?php } ?>
</div>
