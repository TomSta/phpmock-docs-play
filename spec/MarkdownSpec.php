<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Markdown\Reader;
use Markdown\Writer;

class MarkdownSpec extends ObjectBehavior
{
  private $text = "Hello world from PHPSpec";
  private $textInDiv = "<div>Hello world from PHPSpec</div>";

    function it_is_initializable()
    {
        $this->shouldHaveType( 'Markdown' );
    }

    function it_converts_plain_text_to_html_divs()
    {
      $this->toHtml( $this->text )
              ->shouldReturn( $this->textInDiv );
    }

    function it_converts_text_from_external_source( Reader $reader )
    {
      $reader->getMarkDown()
              ->willReturn( $this->text );

      $this->toHtmlFromReader($reader)
              ->shouldReturn( $this->textInDiv );

    }

    function it_outputs_converted_text( Writer $writer )
    {
      $writer->writeText( $this->textInDiv )
                ->shouldBeCalled();

      $this->outputHtml( $this->textInDiv, $writer );
    }

    function it_outputs_converted_text_checked_with_spy( Writer $writer )
    {

      $this->outputHtml( $this->textInDiv, $writer );

      $writer->writeText( $this->textInDiv )
                ->shouldHaveBeenCalled();
    }
}
