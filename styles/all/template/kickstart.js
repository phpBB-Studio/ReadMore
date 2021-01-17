/**
 *
 * phpBB Studio - Read More. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

(function($) {

	'use strict';

	$('blockquote').readmore({
		speed: 75,
		embedCSS: false,
		lessLink: '<div><a href="#"><i class="icon fa-minus fa-fw icon-red" aria-hidden="true"></i><strong>' + read.less + '</strong></a></div>',
		moreLink: '<div><a href="#"><i class="icon fa-plus fa-fw icon-green" aria-hidden="true"></i><strong>' + read.more + '</strong></a></div>',
		collapsedHeight: 300
	})

})(jQuery);
