<?php
/**
 * File class tests tests.
 * @package     Tapakan\File
 * @version     1.0.2
 * @license     http://mit-license.org/
 * @author      Tapakan https://github.com/Tapakan
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

namespace Tapakan\File\Tests;

use Tapakan\File\File;

/**
 * Class FileTests
 * @package Tapakan\File\Tests
 */
class FileTests extends \PHPUnit_Framework_TestCase
{
    public function testGetExt()
    {
        $this->assertEquals('php', File::getExt(__FILE__));
    }

    public function testExists()
    {
        $true  = File::exists(__DIR__ . '/bootstrap.php');
        $false = File::exists(__DIR__ . '/autoload.php');

        $this->assertEquals(true, $true);
        $this->assertEquals(false, $false);
    }
}
