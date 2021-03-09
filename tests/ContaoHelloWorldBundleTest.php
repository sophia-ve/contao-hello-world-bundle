<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Sophiave\ContaoHelloWorldBundle\Tests;

use Sophiave\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Sophiave\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
