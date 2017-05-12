<?php

/**
 * Unit test class for the PrivatePropertiesUnderscore sniff.
 *
 * @author Marko Kruljac <marko.kruljac@degordian.com>
 */

namespace Yii2\Tests\Properties;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class PrivatePropertiesUnderscoreUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList()
    {
        return [
            11 => 1,
        ];
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getWarningList()
    {
        return [];
    }
}
