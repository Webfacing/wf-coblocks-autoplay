=== WebFacing - ® ===
Contributors: knutsp
Donatelink: https://webfacing.eu/
Tags: carousel, autoplay, page builder, gutenberg
Requires at least: 5.0
Tested up to: 5.7.2
Stable tag: 1.0
Requires PHP: 7.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

WebFacing -- Autoplay for Post Carousel Block from GoDaddy® CoBlocks

== Description ==

🕸️ By [WebFacing](https://webfacing.eu/). .

=== Translation ready. Ready translations are ===

* Norwegian (bokmål)

=== Current features ===

* Autoplay for Post Carousel blocks by [CoBlocks](https://wordpress.org/plugins/coblocks/)
* Pause autoplay on hover/mouseover
* Adjust the interval through Plugin API (filter hook), default 5 seconds
* Disable pause through Plugin API (filter hook), default on
* Require specific css class for autoplay through Plugin API (filter hook), default none

== Frequently Asked Questions ==

= Does this plugin add database tables, store options, insert custom post type content, add blocks or scheduled actions? =

No, not, zero, none.

= How do I change the autoplay interval? =

<code>add_filter( 'wf_coblocks_post-carousel_interval', function( int $interval ):int {
	
	
	$interval = 10;	// Seconds
	return $interval;
} );</code>

= How do I disable the autoplay pause on hover? =

<code>add_filter( 'wf_coblocks_post-carousel_pauseonhover', '__return_false' );</code>

= How do I restrict autoplay to only selected blocks/carousels or posts/pages? =

<code>add_filter( 'wf_coblocks_post-carousel_class', function( string $class ): string {
	$class = 'my-autoplay';	// Or whatever valid css class you wish to use
	return $class;
} );</code>

Then add this css class to the selected CoBlocks Post Carousel blocks under the Advanced section in the editor. Other carousels will then not autoplay.

= Can I contribute to this plugin? =

Use support tab for feedback, reports and suggestions until further notice, and Github repo creation.

== Screenshots ==

1. Post Carousel in autoplay mode

== Changelog ==

= 1.0 =

* Initial release, Jul 12, 2021.
