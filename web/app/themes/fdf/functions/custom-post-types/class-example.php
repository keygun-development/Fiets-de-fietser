<?php

namespace functions\customposts;

use Exception;
use functions\core\Proa_Post_Abstract;

class ExamplePost extends Proa_Post_Abstract
{
    private string $price = '';

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice($price): ExamplePost
    {
        $this->price = $price;

        return $this;
    }

    public static function getIdentifier(): string
    {
        return 'example';
    }

    /**
     * @return ExamplePost
     * @throws Exception
     */
    public static function parse($post): self
    {
        $reservation = new ExamplePost();

        if ($post->post_type !== 'example') {
            throw new Exception('Invalid post type given. Expected example.');
        }

        $reservation
            ->setPost($post)
            ->setPrice(get_field('example_price', $post->ID));

        return $reservation;
    }
}
