<?php
namespace LeonhardBolschakow\FigmaTokenStudio\Service;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class TokenService {
    public static function getTokens(): array {
        $filePath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:figma_token_studio/token.json');
        DebuggerUtility::var_dump(json_decode(file_get_contents($filePath), true));
        if (!file_exists($filePath)) {
            return [];
        }
        return json_decode(file_get_contents($filePath), true) ?? [];
    }
}
