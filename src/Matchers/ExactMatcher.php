<?php

namespace Wiledia\Searchy\Matchers;

/**
 * Matches an exact string and applies a high multiplier to bring any exact matches to the top
 * When sanitize is on, if the expression strips some characters from the search query
 * then this may not be able to match against a string despite entering an exact match.
 *
 * Class ExactMatcher
 */
class ExactMatcher extends BaseMatcher
{
    /**
     * @var string
     */
    protected $operator = '=';
}
