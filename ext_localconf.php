<?php
defined('TYPO3_MODE') or die();

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['crt_maintenance']);

if($extConf['disabled']!= 1){
	\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Configuration\\ConfigurationManager')->setLocalConfigurationValueByPath('FE/pageUnavailable_force', true);
	\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Configuration\\ConfigurationManager')->setLocalConfigurationValueByPath('FE/pageUnavailable_handling', $extConf['filePath']);
} else {
	\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Configuration\\ConfigurationManager')->setLocalConfigurationValueByPath('FE/pageUnavailable_force', false);
}