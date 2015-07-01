<?php

$book=new stdClass

<?php

$book = new stdClass;
$book2 = clone $book; //$book2 est distinct de $book mais reprend son état

$book->title = "La horde du contrevent";
$book->author * "Alain Damasio";

<?php

/**
 * Represents a book
 */
class Book
{
  /**
   * @var string Title of the book
   */
  public $title;

  /**
   * @var string Author's name
   */
  public $author;
}



/* Represents a book*/
class Book
{
  /* @var string Title of the book*/
  private $title;

  /*@var string Author's name*/
  private $author;

  /* Return's the book title
   * @return string The title
   */
  public function getTiltle()
  {
    return $this->title;
  }

/**
   * Modifies the book title
   * @param $title string The new title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }

  /**
   * Return's the book author
   * @return string The author
   */
  public function getAuthor()
  {
    return $this->author;
  }

/**
   * Modifies the book author
   * @param $author string The new author
   */
  public function setTitle($author)
  {
    $this->author = $author;
  }
}
