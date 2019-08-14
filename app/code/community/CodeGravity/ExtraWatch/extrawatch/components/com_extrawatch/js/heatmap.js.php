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
defined('_JEXEC') or die('Restricted access');

if (_EW_CLOUD_MODE) {
    $liveSite = _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR;
} else {
    $liveSite = $extraWatch->config->getLiveSite();
}

?>
<script type='text/javascript' src='<?php echo $liveSite; ?><?php echo $extraWatch->env->getEnvironmentSuffix(); ?>components/com_extrawatch/js/jdownloadurl.js'></script> \
<script type='text/javascript' src='<?php echo $liveSite; ?><?php echo $extraWatch->env->getEnvironmentSuffix(); ?>components/com_extrawatch/js/heatmap/heatmap.js'></script> \
<?php
$projectIdParam="";
if (_EW_CLOUD_MODE) {
    $projectIdParam="&amp;projectId=\"+extrawatch_projectId+\"";
} ?>
<script type='text/javascript' src='<?php echo $liveSite; ?><?php echo $extraWatch->env->getEnvironmentSuffix(); ?><?php echo $extraWatch->env->renderAjaxLink('ajax','heatmap.include.js');?>&env=<?php echo get_class($extraWatch->config->env);?>&amp;id=<?php echo($id);?>&amp;extraWatchHeatmap=<?php echo($extraWatch->helper->requestGet('extraWatchHeatmap'));?>&amp;extraWatchDay=<?php echo($extraWatch->helper->requestGet('extraWatchDay'));?><?php echo($projectIdParam);?>&amp;params="+encodeURIComponent("getParams=" + encodeURIComponent(location.search)) + "&title=" + document.title + "&uri=" + location.pathname+"'></script> \
