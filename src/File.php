<?php
/**
 * File helper class
 * @package     Tapakan\File
 * @version     1.0.2
 * @license     http://mit-license.org/
 * @author      Tapakan https://github.com/Tapakan
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

namespace Tapakan\File;

use SplFileInfo;

/**
 * Class File
 * @package Tapakan\File
 */
class File
{
    /**
     * Returns file extension.
     *
     * @param string $file Path to the file.
     *
     * @return string
     */
    public static function getExt($file)
    {
        $spl = new SplFileInfo($file);
        
        return $spl->getExtension();
    }

    /**
     * Wrapper for the standard file_exists function
     *
     * @param   string $file File path
     *
     * @return  boolean  True if path is a file
     */
    public static function exists($file)
    {
        return is_file($file);
    }
}
