<?php
/**
 *
 * phpBB Studio - Read More. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbstudio\readmore\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * phpBB Studio - Read More Event listener.
 */
class main implements EventSubscriberInterface
{
	/* @var \phpbb\language\language */
	protected $language;

	/**
	 * Constructor.
	 *
	 * @param \phpbb\language\language		$language	Language object
	 */
	public function __construct(\phpbb\language\language $language)
	{
		$this->language = $language;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core.
	 *
	 * @return array
	 * @static
	 */
	public static function getSubscribedEvents(): array
	{
		return ['core.user_setup_after' => 'readmore_load_language'];
	}

	/**
	 * Configure user language
	 *
	 * @event  core.user_setup_after
	 * @return void
	 */
	public function readmore_load_language(): void
	{
		$this->language->add_lang('common', 'phpbbstudio/readmore');
	}
}
