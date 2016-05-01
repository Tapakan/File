<?php
/**
 * File class tests tests.
 * @package     File
 * @version     1.0.1
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
}
