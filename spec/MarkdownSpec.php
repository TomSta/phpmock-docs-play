<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Markdown\Reader;
class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Markdown');
    }

    function it_converts_plain_text_to_html_divs()
    {
      $this->toHtml("Hello world from PHPSpec")
              ->shouldReturn("<div>Hello world from PHPSpec</div>");
    }

    function it_converts_text_from_external_source(Reader $reader)
    {
      $reader->getMarkDown()
              ->willReturn("Hello world from PHPSpec");

      $this->toHtmlFromReader($reader)
              ->shouldReturn("<div>Hello world from PHPSpec</div>");

    }
}
