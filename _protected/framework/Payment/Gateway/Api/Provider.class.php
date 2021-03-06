<?php
/**
 * @title            Provider Class
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2014, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Framework / Payment / Gateway / Api
 * @version          1.0
 */

namespace PH7\Framework\Payment\Gateway\Api;
defined('PH7') or exit('Restricted access');

abstract class Provider
{

    protected $aParams = array();

    /**
     * @param string $sName
     * @param string $sValue
     * @return object this
     */
    public function param($sName, $sValue)
    {
        $this->aParams[$sName] = $sValue;
        return $this;
    }

    /**
     * Generate Output.
     *
     * @return string HTML tags
     */
    public function generate()
    {
        $sHtml = ''; // Default Value

        foreach ($this->aParams as $sKey => $sVal)
            $sHtml .= "<input type=\"hidden\" name=\"$sKey\" value=\"$sVal\" />\n";

        return $sHtml;
    }

}
