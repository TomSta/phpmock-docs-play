<?php

namespace spec\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FlatSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\Flat');
    }
}
