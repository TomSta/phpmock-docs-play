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

    function it_is_initializable() {
        $this->shouldHaveType( 'Markdown' );
    }

    function it_converts_plain_text_to_html_divs() {
      $this->toHtml( $this->text )
              ->shouldReturn( $this->textInDiv );
    }

    function it_converts_text_from_external_source( Reader $reader ) {
      $reader->getMarkDown()
              ->willReturn( $this->text );

      $this->toHtmlFromReader($reader)
              ->shouldReturn( $this->textInDiv );

    }

    function it_outputs_converted_text_mock_check( $writer ) {
      $writer->writeText( $this->textInDiv )
                ->shouldBeCalled();

      $this->outputHtml( $this->textInDiv, $writer );
    }

    function it_outputs_converted_text_spy_check( $writer ) {
      $this->outputHtml( $this->textInDiv, $writer );

      $writer->writeText( $this->textInDiv )
                ->shouldHaveBeenCalled();
    }

    function it_pass_object_to_constructor_with_method_one( $writer ) {
        $writer->writeText( $this->textInDiv )->shouldBeCalled();

        $this->outputHtml( $this->textInDiv );
    }

  function let( Writer $writer )  {
    $this->beConstructedWith($writer);
  }

  function letGo() {
    //this will run after each spec, similar to afterEach in Jasmine
  }
}
