<?php

class Yii2_Sniffs_Properties_PrivatePropertiesUnderscoreSniff implements PHP_CodeSniffer_Sniff
{
    public function register()
    {
        return [T_PRIVATE];
    }

    public function process(PHP_CodeSniffer_File $file, $pointer)
    {
        $tokens = $file->getTokens();
        if ($tokens[$pointer]['content'] === 'private' &&
            $tokens[$pointer + 1]['type'] === 'T_WHITESPACE' &&
            $tokens[$pointer + 2]['type'] === 'T_VARIABLE' &&
            strpos($tokens[$pointer + 2]['content'], '$_') !== 0) {

            $data  = [$tokens[$pointer + 2]['content']];
            $file->addError('Private property name "%s" must be prefixed with underscore.', $pointer, 'NoUnderscore', $data);
        }
    }
}
