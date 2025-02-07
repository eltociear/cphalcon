<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Unit\Debug;

use Phalcon\Support\Debug;
use UnitTester;

class SetUriCest
{
    /**
     * Tests Phalcon\Debug :: setUri()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function supportDebugSetUri(UnitTester $I)
    {
        $I->wantToTest('Debug - setUri()');

        $debug = new Debug();

        $uri = 'https://something.com/test/';

        $expected = sprintf(
            "<link rel='stylesheet' type='text/css' " .
            'href=\'%1$sassets/jquery-ui/themes/ui-lightness/jquery-ui.min.css\' />' .
            "<link rel='stylesheet' type='text/css' " .
            'href=\'%1$sassets/jquery-ui/themes/ui-lightness/theme.css\' />' .
            "<link rel='stylesheet' type='text/css' " .
            'href=\'%1$sthemes/default/style.css\' />',
            $uri
        );

        $debug->setUri($uri);

        $I->assertEquals(
            $expected,
            $debug->getCssSources()
        );
    }
}
