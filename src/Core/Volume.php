<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Volume extends VPS
{
    protected $endpoint = 'volumes';

    function __construct()
    {
        parent::setHeader();
    }
}