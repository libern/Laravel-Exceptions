<?php

/*
 * This file is part of Laravel Exceptions.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\Exceptions;

use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTestCaseTrait;

    public function testExceptionHandlerIsInjectable()
    {
        $this->assertIsInjectable('GrahamCampbell\Exceptions\ExceptionHandler');
    }

    public function testArrayDisplayerIsInjectable()
    {
        $this->assertIsInjectable('GrahamCampbell\Exceptions\Displayers\ArrayDisplayer');
    }

    public function testDebugDisplayerIsInjectable()
    {
        $this->assertIsInjectable('GrahamCampbell\Exceptions\Displayers\DebugDisplayer');
    }

    public function testPlainDisplayerIsInjectable()
    {
        $this->assertIsInjectable('GrahamCampbell\Exceptions\Displayers\PlainDisplayer');
    }
}
