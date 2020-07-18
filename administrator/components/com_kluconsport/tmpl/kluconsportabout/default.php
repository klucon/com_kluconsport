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

<div class="aboutkluconsport">
<p><?php echo JText::_('COM_KLUCONSPORT_ABOUT_TEXT'); ?></p>
</div>

<table class="table">
  <tbody>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_AUTHOR'); ?></th>
      <td>Ondřej Klučka</td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_WWW'); ?></th>
      <td><a href="https://www.klucon.cz" target="_new">www.klucon.cz</a></td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_EMAIL'); ?></th>
      <td>info@klucon.cz</td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_SOURCECODE'); ?></th>
      <td><a href="https://www.github.com/klucon/kluconsport/" target="_new">https://www.github.com/</td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_SUPPORT'); ?></th>
      <td><a href="https://www.klucon.cz" target="_new">www.klucon.cz</a></td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_VERSION'); ?></th>
      <td><?php echo getversion(); ?></td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_LICENSE'); ?></th>
      <td><a href="http://www.gnu.org/licenses/gpl-3.0.html" target="_new">GNU/GPL</td>
    </tr>
    <tr>
      <th scope="row"><?php echo JText::_('COM_KLUCONSPORT_ABOUT_COPYRIGHT'); ?></th>
      <td>
		<p> © 09/09/2019 - <?php echo date("Y"); ?> Ondřej Klučka <br>
			Flags: <a href="https://www.phoca.cz/cssflags/" target="_new">https://www.phoca.cz/cssflags/</a><br />
                        Sport Types icons by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
		</p>
	  </td>
    </tr>	
  </tbody>
</table>

<div style="float:right">
	<a href="index.php?option=com_kluconsport"><img src="<?php echo JURI::root(); ?>/media/com_kluconsport/images/administrator/back.svg" alt="<?php echo JText::_('COM_KLUCONSPORT_ABOUT_BACKTOCP'); ?>" style="width:24px">&nbsp;<?php echo JText::_('COM_KLUCONSPORT_ABOUT_BACKTOCP'); ?></a>
</div>

<?php
function getversion() {
	$xml = simplexml_load_file(JPATH_COMPONENT_ADMINISTRATOR . '/kluconsport.xml');
	echo $xml->version;
}
?>