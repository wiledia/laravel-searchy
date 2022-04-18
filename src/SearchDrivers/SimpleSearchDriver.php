<?php

namespace Wiledia\Searchy\SearchDrivers;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Wiledia\Searchy\Matchers\ExactMatcher::class         => 100,
        \Wiledia\Searchy\Matchers\StartOfStringMatcher::class => 50,
        \Wiledia\Searchy\Matchers\InStringMatcher::class      => 30,
    ];
}
