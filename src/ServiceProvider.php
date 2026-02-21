<?php

namespace Netforma\Section;

use Statamic\Providers\AddonServiceProvider;
use Netforma\Section\Fieldtypes\Section as SectionFieldtype;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        SectionFieldtype::class,
    ];

    protected $vite = [
        'input' => [
            'resources/js/cp.js',
            'resources/css/cp.css',
        ],
        'publicDirectory' => 'resources/dist',
    ];
}
