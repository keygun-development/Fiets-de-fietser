<?php
    use functions\customposts\ExamplePost;

    $exampleposts = ExamplePost::findBy(
        [
            'orderby' => 'date',
            'post_type' => 'reservation',
        ],
        $args['limit'] ?? null
    );
    dd($exampleposts);
?>