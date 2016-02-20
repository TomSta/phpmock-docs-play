<?php
use Markdown\Reader;
use Markdown\Writer;

class Markdown
{
  public function toHtml( string $string ) :string
  {
    return "<div>".$string."</div>";
  }

    public function toHtmlFromReader( Reader $reader ) :string
    {
        return $this->toHtml( $reader->getMarkDown() );
    }

    public function outputHtml( string $text, Writer $writer)
    {
      $writer->writeText( $text );
    }
}
