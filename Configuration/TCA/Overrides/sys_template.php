<?php

defined('TYPO3') or die();

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'figma_token_studio',
            'Configuration/TypoScript',
            'Figma Token Studio - Test Template'
        );
    }
);
