<?php
/**
 * @version   $Id: Abstract.php 13467 2013-09-13 23:41:54Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2016 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

abstract class RokSprocket_Provider_Zoo_FieldProcessor_Abstract implements RokSprocket_Provider_Zoo_FieldProcessorInterface
{
	protected function canRepeat(Element $element)
	{
		return ($element instanceof ElementRepeatable);
	}
}
 