<?php

namespace Wiledia\Searchy\SearchDrivers;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Wiledia\Searchy\Matchers\LevenshteinMatcher::class => 100,
    ];
}
