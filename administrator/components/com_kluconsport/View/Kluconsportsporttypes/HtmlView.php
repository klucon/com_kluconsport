<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_kluconsport
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Joomla\Component\Kluconsport\Administrator\View\Kluconsportsporttypes;

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\Toolbar;
use Joomla\CMS\Toolbar\ToolbarHelper;
/**
 * View class for a list of kluconsport.
 *
 * @since  1.0.0
 */

class HtmlView extends BaseHtmlView
{
	/**
	 * An array of items
	 *
	 * @var  array
	 */
	protected $items;
	/**
	 * Method to display the view.
	 *
	 * @param   string  $tpl  A template file to load. [optional]
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function display($tpl = null): void
	{
		$this->items = $this->get('Items');
		$this->addToolbar();
		parent::display($tpl);
	}
	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function addToolbar()
	{
		// Get the toolbar object instance
		$toolbar = Toolbar::getInstance('toolbar');
		ToolbarHelper::title(Text::_('COM_KLUCONSPORT_SPORTTYPES_INFO'), 'address kluconsport');
		$toolbar->addNew('kluconsport.add');
                $toolbar->Edit('kluconsport.edit');
                $toolbar->Delete('kluconsport.delete');
	}
}