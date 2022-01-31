<?php

use functions\customposts\ExamplePost;

require_once __DIR__.'/QueryTransform.php';

class QueryTransformRegistry
{
    public static function registerAll(): void
    {
        QueryTransform::builder()
            ->whenMainQuery()
            ->whenArchive()
            ->whenPostType(ExamplePost::getIdentifier())
            ->when(fn() => ($_GET['tech'] ?? '*') === '*')
            ->postsPerPage(($_GET['tech'] ?? false) ? 6 : 9)
            ->build();

        QueryTransform::builder()
            ->whenMainQuery()
            ->whenArchive()
            ->whenPostType(ExamplePost::getIdentifier())
            ->when(fn() => ($_GET['tech'] ?? '*') !== '*')
            ->postsPerPage(($_GET['tech'] ?? false) ? 6 : 9)
            ->build();
    }
}
