<?php

require_once __DIR__ . '/functions/menu.php';
require_once __DIR__ . '/template_parts/hero-article.php';

/** Proa tech bubble row shortcode */
require_once __DIR__ . '/functions/detail-bubbles.php';

/** Alter the behaviour of the comments field. */
require_once __DIR__ . '/functions/comment-form-fields.php';

/** Custom comment callback to render the comments with our own markup. */
require_once __DIR__ . '/functions/custom-comment-callback.php';

require_once __DIR__ . '/functions/api/class-proa-api-response-factory.php';
require_once __DIR__ . '/functions/api/class-proa-api-serializer.php';
require_once __DIR__ . '/functions/api/class-proa-api-suggestion-serializer.php';
require_once __DIR__ . '/functions/api/class-proa-api-response-document.php';
require_once __DIR__ . '/functions/api/class-proa-searcher.php';
require_once __DIR__ . '/functions/api/class-proa-suggestion-searcher.php';

/** Base Proa_Object which other Proa_* objects can extends. */
require_once __DIR__ . '/functions/core/class-proa-base-properties.php';
require_once __DIR__ . '/functions/core/class-proa-retrievable-object.php';
require_once __DIR__ . '/functions/core/class-proa-object.php';
require_once __DIR__ . '/functions/core/class-proa-post-abstract.php';
require_once __DIR__ . '/functions/core/class-proa-term-abstract.php';

/** Custom post types */
require_once __DIR__ . '/functions/custom-post-types/example.php';

require_once __DIR__ . '/functions/custom-post-types/class-default-post.php';
require_once __DIR__ . '/functions/custom-post-types/class-example.php';

require_once __DIR__ . '/functions/custom-users/users.php';

/** Defines custom image sizes for the theme. */
require_once __DIR__ . '/functions/image-sizes.php';

/** Removes several actions from WordPress. */
require_once __DIR__ . '/functions/remove-actions.php';

/** Loads required class and conditional logic for the site hero. */
require_once __DIR__ . '/functions/site-hero-logic.php';

/** Loads the get SVG function. */
require_once __DIR__ . '/functions/get-svg-icon.php';

/** Includes various helper functions, such as dd(), dump() and things like proa_get_logo(). */
require_once __DIR__ . '/functions/helpers.php';

/** Includes all the required "general" shortcodes. */
require_once __DIR__ . '/functions/shortcodes.php';

/** Includes the required shortcodes for expert/participant/technique overviews. */
require_once __DIR__ . '/functions/custom-post-type-shortcodes.php';

/** Registers our custom sidebars with WordPress. */
require_once __DIR__ . '/functions/register-sidebars.php';

/** Excerpts */
require_once __DIR__ . '/functions/excerpt.php';

/** Registers filters */
require_once __DIR__ . '/functions/filters.php';

require_once __DIR__.'/functions/query-transform/QueryTransformRegistry.php';
QueryTransformRegistry::registerAll();
