<?php

namespace functions\customposts;

use functions\core\Proa_Post_Abstract;

class DefaultPost extends Proa_Post_Abstract
{
    /**
     * @return string
     */
    public static function getIdentifier(): string
    {
        return 'post';
    }

    /**
     * @param WP_Post $post
     *
     * @return DefaultPost
     * @throws Exception
     */
    public static function parse($post): self
    {
        if ($post->post_type !== 'post') {
            throw new Exception('Invalid post type given. Expected post.');
        }

        $storedPost = new DefaultPost();

        $storedPost->setPost($post);

        return $storedPost;
    }
}
