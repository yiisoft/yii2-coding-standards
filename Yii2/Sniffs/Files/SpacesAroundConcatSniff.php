<?php

/**
 * Class for a sniff to oblige whitespaces before and after a concatenation operator
 *
 * This Sniff check if a whitespace is missing before or after any concatenation
 * operator.
 * The concatenation operator is identified by the PHP token T_STRING_CONCAT
 * The whitespace is identified by the PHP token T_WHITESPACE
 *
 * @since 2.0.2
 */
class Yii2_Sniffs_Files_SpacesAroundConcatSniff implements PHP_CodeSniffer_Sniff
{
    public function register()
    {
        return [T_STRING_CONCAT];
    }

    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        if ($tokens[$stackPtr-1]['type'] !== 'T_WHITESPACE') {
            $error = 'Whitespace is expected before any concat operator "."';
            $fix = $phpcsFile->addFixableError($error, $stackPtr, 'NoSpace');
            if ($fix === true) {
                $phpcsFile->fixer->addContentBefore($stackPtr, ' ');
            }
        }
        if ($tokens[$stackPtr+1]['type'] !== 'T_WHITESPACE') {
            $error = 'Whitespace is expected after any concat operator "."';
            $fix = $phpcsFile->addFixableError($error, $stackPtr, 'NoSpace');
            if ($fix === true) {
                $phpcsFile->fixer->addContent($stackPtr, ' ');
            }
        }
    }
}
