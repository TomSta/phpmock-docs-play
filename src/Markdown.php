<?php
use Markdown\Reader;
use Markdown\Writer;

class Markdown
{
  private $writer;

  public function __construct( Writer $writer )
  {
    $this->writer = $writer;
  }
  public function toHtml( string $string ) :string
  {
    return "<div>".$string."</div>";
  }

    public function toHtmlFromReader( Reader $reader ) :string
    {
        return $this->toHtml( $reader->getMarkDown() );
    }

    public function outputHtml( string $text)
    {
      $this->writer->writeText( $text );
    }
}
