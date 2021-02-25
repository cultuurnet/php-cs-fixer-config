<?php

declare(strict_types=1);

namespace Publiq\PhpCsFixer;

use PhpCsFixer\Config as PhpCsFixerConfig;

class Config extends PhpCsFixerConfig
{
    public function __construct()
    {
        parent::__construct('publiq');
        $this->setRiskyAllowed(true);
    }

    public function getRules(): array
    {
        return [];
    }
}
