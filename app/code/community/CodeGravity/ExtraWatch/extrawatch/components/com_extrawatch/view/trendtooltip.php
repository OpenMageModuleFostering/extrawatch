<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1550
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>

<iframe width="<?php echo $extraWatch->config->getConfigValue('EXTRAWATCH_TOOLTIP_WIDTH'); ?>"
        height="<?php echo $extraWatch->config->getConfigValue('EXTRAWATCH_TOOLTIP_HEIGHT'); ?>" frameborder="0"
        marginwidth="0" marginheight="0"
        src="<?php echo ($extraWatch->helper->getIP2LocationURL(@ExtraWatchHelper::requestGet('ip')));?>"/>