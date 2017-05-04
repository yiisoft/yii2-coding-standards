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

namespace PHP_CodeSniffer\Standards\Yii2\Sniffs\Files;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class SpacesAroundConcatSniff implements Sniff
{
    public function register()
    {
        return [T_STRING_CONCAT];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        if ($tokens[$stackPtr - 1]['type'] !== 'T_WHITESPACE') {
            $error = 'Whitespace is expected before any concat operator "."';
            $fix = $phpcsFile->addFixableError($error, $stackPtr, 'NoSpace');
            if ($fix === true) {
                $phpcsFile->fixer->addContentBefore($stackPtr, ' ');
            }
        }
        if ($tokens[$stackPtr + 1]['type'] !== 'T_WHITESPACE') {
            $error = 'Whitespace is expected after any concat operator "."';
            $fix = $phpcsFile->addFixableError($error, $stackPtr, 'NoSpace');
            if ($fix === true) {
                $phpcsFile->fixer->addContent($stackPtr, ' ');
            }
        }
    }
}
