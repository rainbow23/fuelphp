<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(


	// the active pagination template
	// 'active'                      => 'bootstrap3',
	'active'                      => 'default',


// Twitter bootstrap 3.x template
    'default'                   => array(
        'wrapper'                 => "<ul class=\"pagination\">\n\t{pagination}\n\t</ul>\n",

        'first'                   => "<li>{link}</li>",
        'first-marker'            => "««",
        'first-link'              => "<a href=\"{uri}\">{page}</a>",

        'first-inactive'          => "",
        'first-inactive-link'     => "",

        'previous'                => "<li>{link}</li>",
        'previous-marker'         => "«",
        'previous-link'           => "<a href=\"{uri}\" rel=\"prev\">{page}</a>",

        'previous-inactive'       => "<li class=\"disabled\">{link}</li>",
        'previous-inactive-link'  => "<a href=\"#\" rel=\"prev\">{page}</a>",

        'regular'                 => "<li>{link}</li>",
        'regular-link'            => "<a href=\"{uri}\">{page}</a>",

        'active'                  => "<li class=\"active\">{link}</li>",
        'active-link'             => "<a href=\"#\">{page} <span class=\"sr-only\"></span></a>",

        'next'                    => "<li>{link}</li>",
        'next-marker'             => "»",
        'next-link'               => "<a href=\"{uri}\" rel=\"next\">{page}</a>",

        'next-inactive'           => "<li class=\"disabled\">{link}</li>",
        'next-inactive-link'      => "<a href=\"#\" rel=\"next\">{page}</a>",

        'last'                    => "<li>{link}</li>",
        'last-marker'             => "»»",
        'last-link'               => "<a href=\"{uri}\">{page}</a>",

        'last-inactive'           => "",
        'last-inactive-link'      => "",
    ),



);
