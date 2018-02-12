<?php

namespace Markussom\SitemapGenerator\Service;

/**
 * This file is part of the TYPO3 CMS project.
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class OrderByService
 */
class OrderByServiceTest extends \Nimut\TestingFramework\TestCase\UnitTestCase
{

    /**
     * @test
     */
    public function canReturnTheOrderByStatementForDatabaseConnection()
    {
        $GLOBALS['TCA'] = [
            'pages' => [
                'columns' => [
                    'title' => [],
                    'created' => []
                ],
            ],
        ];
        $actual = OrderByService::getOrderByString('title DESC, created ASC', 'pages');
        $this->assertSame('title DESC,created ASC', $actual);
    }
}
