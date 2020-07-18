<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_kluconsport
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Joomla\Component\Kluconsport\Site\Model;
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;
/**
 * Kluconsport model for the Joomla Kluconsport component.
 *
 * @since  1.0.0
 */
class KluconsportModel extends BaseDatabaseModel
{
	/**
	 * @var string message
	 */
	protected $message;
	/**
	 * Get the message
	 *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'Hello Foo!';
		}
		return $this->message;
	}
}