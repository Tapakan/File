<?php
/**
 * File helper class
 * @package     eva\helpers
 * @version     1.0
 * @license     http://mit-license.org/
 * @author      Tapakan https://github.com/Tapakan
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

namespace eva\helpers;

use SplFileInfo;

/**
 * Class File
 * @package eva\helpers
 */
class File
{
    /**
     * Returns file extension.
     * @param string $file Path to the file.
     *
     * @return string
     */
    public static function getExt($file)
    {
        $spl = new SplFileInfo($file);
        
        return $spl->getExtension();
    }
}
