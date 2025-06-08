<?php
namespace LeonhardBolschakow\FigmaTokenStudio\ViewHelpers;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use LeonhardBolschakow\FigmaTokenStudio\Service\TokenService;

class ConvertJsonToCssViewHelper extends AbstractViewHelper {

    protected $escapeOutput = false;

    public function initializeArguments(): void
    {
        $this->registerArgument(
            'json',
            'string',
            'json file',
            false
        );
    }


    public function render(): string
    {

        $tokens = TokenService::getTokens();
        DebuggerUtility::var_dump($tokens);

        $json = $this->arguments['json'];

        return 'Hallo Welt!';
    }
}
