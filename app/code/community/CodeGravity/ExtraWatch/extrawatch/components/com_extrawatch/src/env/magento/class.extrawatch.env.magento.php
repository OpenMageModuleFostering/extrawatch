<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1550
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchMagentoEnv implements ExtraWatchEnv
{
    const EW_ENV_NAME = "magento";

    function getDatabase($user = "")
    {
        return new ExtraWatchDBWrapMagento();
    }

    function getRequest()
    {
        return new EnvRequest();
    }

    function & getURI()
    {
        return "fakeURL";
    }

    function isSSL()
    {
        //TODO change
        return FALSE;
    }

    function getRootSite()
    {
        //print_r($_SERVER);
        $hostname = ExtraWatchHelper::getProtocol()."://" . $_SERVER['HTTP_HOST'];
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $subdir = str_replace($this->getEnvironmentSuffix() , "", $scriptName);
        $subdir = str_replace("components/com_extrawatch/extrawatch.php" , "", $subdir);
        $subdir = str_replace("index.php", "", $subdir);
		
		$url = parse_url($hostname . $subdir);
		$liveSitePath = $url['path'];

	    return $liveSitePath;
    }

    function getAdminDir()
    {
        return "index.php/extrawatch/adminhtml_extrawatch";
    }


    function getCurrentUser()
    {
        return $this->getUsername();
    }

    function getUsersCustomTimezoneOffset()
    {
        return 0;
    }

    function getEnvironmentSuffix()
    {
        return "app/code/community/CodeGravity/ExtraWatch/extrawatch/";
    }

    function renderLink($task, $otherParams)
    {
        return "?task=$task&action=$otherParams";
    }

    function getUser()
    {
        $user = Mage::getSingleton('admin/session')->getUser();
        return $user;
    }

    function getTitle()
    {
        $title = $GLOBALS['extrawatch_page_title'];
        return $title;
    }

    function getAdminEmail()
    {
        $session = Mage::getSingleton('admin/session');
        if($session->isLoggedIn()) {
            $currentUser = $session->getUser();
            return $currentUser->getEmail();
        }
    }

    function getUsername()
    {
        if (@class_exists('Mage')) {
            $session = Mage::getSingleton('customer/session');
            if($session->isLoggedIn()) {
                $customer = $session->getCustomer();
                return $customer->getName();
            }
        }

        return "";
    }

    function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
    {
        $mail = Mage::getModel('core/email');
        $mail->setToName($recipient);
        $mail->setToEmail($recipient);
        $mail->setBody($body);
        $mail->setSubject($subject);
        $mail->setFromEmail($sender);
        $mail->setFromName($sender);
        $mail->setType('html');

        try {
            $mail->send();
            Mage::log("Email to $recipient has been sent");
        }
        catch (Exception $e) {
            Mage::log("Unable to send email to $recipient");
            Mage::logException($e);
        }
    }

    function getDbPrefix()
    {
        $dbPrefix = Mage::getConfig()->getTablePrefix()->asArray();
        return $dbPrefix;
    }

    function getTimezoneOffset()
    {
		return ExtraWatchHelper::getTimezoneOffsetByTimezoneName(@date_default_timezone_get());
    }

    function getAllowedDirsToCheckForSize()
    {
        $dirs = array(
            "../../../../../../"
        );
        return $dirs;
    }

    function getDirsToCheckForSize($directory)
    {
        $dirs = array();

        $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = ".".DS."app".DS."code".DS."community".DS;
        $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = FALSE;

        $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "..".DS."..".DS."..".DS."..".DS."..".DS."..".DS;
        $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = ".".DS;

        return $dirs;
    }

    /**
     * env
     * @return unknown
     */
    function getAgentNotPublishedMsg($database)
    {
        //TODO implement
        return FALSE;
    }

    function getFormKey() {
        return Mage::getSingleton('core/session')->getFormKey();
    }


    public function getReviewLink()
    {
        // TODO: Implement getReviewLink() method.
    }

    public function getVoteLink()
    {
        // TODO: Implement getVoteLink() method.
    }

    public function getEnvironmentName()
    {
        return self::EW_ENV_NAME;
    }

    public function getRootPath() {
        return ;
    }

    public function getTempDirectory() {
       return ini_get('upload_tmp_dir');
    }

    function getUserId()
    {
        //TODO implement
    }

    public function getUsernameById($userId) {
        //TODO implement
    }

    public function renderAjaxLink($task, $action) {
        $routerFile = "components/com_extrawatch/extrawatch.php?action=".$action."&task=".$task;
        return $routerFile; 
	}

    public function addStyleSheet($cssURL)
    {
        $output = "<style type=\"text/css\" media=\"screen, projection\">
        <!--
        @import url(" . $cssURL . ");
        -->
        </style>";
        return $output;
    }



}


