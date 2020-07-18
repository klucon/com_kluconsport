<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_kluconsport
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>

<table border="1" width="100%">
    <tr><td><?php echo JText::_('COM_KLUCONSPORT_SPORTTYPES_NAME'); ?></td><td><?php echo JText::_('COM_KLUCONSPORT_SPORTTYPES_CONSTANT'); ?></td><td><?php echo JText::_('COM_KLUCONSPORT_SPORTTYPES_ICON'); ?></td><td><?php echo JText::_('COM_KLUCONSPORT_SPORTTYPES_ID'); ?></td></tr>
</table>


<?php foreach ($this->items as $i => $item) : ?>
<?php echo $item->name; ?>
</br>
<?php endforeach; ?>