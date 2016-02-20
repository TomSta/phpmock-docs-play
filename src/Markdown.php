<?php

class Markdown
{
  public function toHtml(string $string) :string
  {
    return "<div>".$string."</div>";
  }
}
