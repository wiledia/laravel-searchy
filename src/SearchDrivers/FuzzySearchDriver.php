<?php

namespace Wiledia\Searchy\SearchDrivers;

class FuzzySearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Wiledia\Searchy\Matchers\ExactMatcher::class                 => 100,
        \Wiledia\Searchy\Matchers\StartOfStringMatcher::class         => 50,
        \Wiledia\Searchy\Matchers\AcronymMatcher::class               => 42,
        \Wiledia\Searchy\Matchers\ConsecutiveCharactersMatcher::class => 40,
        \Wiledia\Searchy\Matchers\StartOfWordsMatcher::class          => 35,
        \Wiledia\Searchy\Matchers\StudlyCaseMatcher::class            => 32,
        \Wiledia\Searchy\Matchers\InStringMatcher::class              => 30,
        \Wiledia\Searchy\Matchers\TimesInStringMatcher::class         => 8,
    ];
}
