<?php

declare(strict_types=1);

namespace Publiq\PhpCsFixer;

use PhpCsFixer\Config as PhpCsFixerConfig;
use PhpCsFixer\Finder;

class Config extends PhpCsFixerConfig
{
    public function __construct()
    {
        parent::__construct('publiq');
        $this->setRiskyAllowed(true);
    }

    public static function fromFolders(array $folders, array $exclude = []): self
    {
        $config = new self();
        return $config->setFinder(
            Finder::create()->in($folders)->exclude($exclude)
        );
    }

    public function getRules(): array
    {
        return [
            '@PSR12' => true,
            'array_syntax' => ['syntax' => 'short'],
            'php_unit_method_casing' => false,
            'trailing_comma_in_multiline_array' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_unused_imports' => true,
            'concat_space' => ['spacing' => 'one'],
            'modernize_types_casting' => true,
            'no_superfluous_phpdoc_tags' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_var_without_name' => true,
            'protected_to_private' => true,
            'single_quote' => true,
        ];
    }
}
