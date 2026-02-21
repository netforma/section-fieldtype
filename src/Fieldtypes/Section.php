<?php

namespace Netforma\Section\Fieldtypes;

use Statamic\Fields\Fieldtype;

class Section extends Fieldtype
{
    protected $categories = ['structured'];

    protected $icon = 'section';

    protected $defaultable = false;

    protected $selectableInForms = true;
}
