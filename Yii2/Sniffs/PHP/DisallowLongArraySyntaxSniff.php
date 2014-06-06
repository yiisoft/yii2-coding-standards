<?php

/**
 * This sniff prohibits the use of the old array() syntax.
 */

/**
 * This sniff prohibits the use of the old array() syntax.
 *
 * For example:
 *
 * <code>
 * $array = array(
 *     "foo" => "bar",
 *     "bar" => "foo",
 * );
 * </code>
 *
 * The short syntax should be used instead:
 *
 * <code>
 * $array = [
 *     "foo" => "bar",
 *     "bar" => "foo",
 * ];
 * </code>
 *
 */

class Yii2_Sniffs_PHP_DisallowLongArraySyntaxSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * Returns the token types that this sniff is interested in.
     *
     * @return array(int)
     */
    public function register()
    {
        return array(T_ARRAY);
    }//end register()

    /**
     * Processes the tokens that this sniff is interested in.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where the token was found.
     * @param int                  $stackPtr  The position in the stack where
     *                                        the token was found.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$stackPtr]['content'] === 'array') {
            $error = 'Expected [], found %s';
            $data  = array(trim($tokens[$stackPtr]['content']));
            $phpcsFile->addError($error, $stackPtr, '', $data);
        }

    }//end process()

}