<?php
use Markdown\Reader;

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
}
