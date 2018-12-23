<?php

/**
 * This file is part of the php-epp2 library.
 *
 * (c) Gunter Grodotzki <gunter@afri.cc>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace AfriCC\EPP\Extension\FRED\Create;

use AfriCC\EPP\ExtensionInterface as Extension;
use AfriCC\EPP\Frame\Command\Create as CreateCommand;

/**
 * @see https://fred.nic.cz/documentation/html/EPPReference/CommandStructure/Create/CreateNsset.html
 */
class Nsset extends CreateCommand implements Extension
{
    protected $extension_xmlns = 'http://www.nic.cz/xml/epp/nsset-1.2';

    public function setId($id)
    {
        $this->set('nsset:id', $id);
    }

    public function getExtensionNamespace()
    {
        return $this->extension_xmlns;
    }
}
