<?php
use Markdown\Reader;
use Markdown\Writer;

class Markdown
{
<<<<<<< HEAD
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
=======
  public function toHtml(string $string) :string
  {
    return "<div>".$string."</div>";
  }
>>>>>>> 19135576c1c3a52f376c3ae088d24192b7d5da27
}
