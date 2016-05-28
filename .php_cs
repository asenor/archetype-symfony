<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$header_comment = "\n";

$finder = Finder::create()
    ->in(__DIR__)
    ->exclude([
        'cache',
        'ansible',
        'node_modules',
    ])
    ->notName('SymfonyRequirements.php')
    ->notName('check.php')
    ->notName('config.php');

return Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'concat_without_spaces' => false,
        'header_comment' => ['header' => $header_comment],
        'concat_with_spaces' => true,
        'ordered_imports' => true,
        'short_array_syntax' => true,
        'ordered_class_elements' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'combine_consecutive_unsets' => true,
    ])
    ->finder($finder);
