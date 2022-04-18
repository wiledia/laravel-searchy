<?php

namespace Wiledia\Searchy\SearchDrivers;

class FuzzySearchUnicodeDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Wiledia\Searchy\Matchers\ExactMatcher::class                        => 100,
        \Wiledia\Searchy\Matchers\StartOfStringMatcher::class                => 50,
        \Wiledia\Searchy\Matchers\AcronymUnicodeMatcher::class               => 42,
        \Wiledia\Searchy\Matchers\ConsecutiveCharactersUnicodeMatcher::class => 40,
        \Wiledia\Searchy\Matchers\StartOfWordsMatcher::class                 => 35,
        \Wiledia\Searchy\Matchers\StudlyCaseUnicodeMatcher::class            => 32,
        \Wiledia\Searchy\Matchers\InStringMatcher::class                     => 30,
        \Wiledia\Searchy\Matchers\TimesInStringMatcher::class                => 8,
    ];
}
