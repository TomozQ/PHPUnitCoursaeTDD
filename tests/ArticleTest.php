<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
  protected $article;

  protected function setUp(): void
  {
    $this->article = new App\Article;
  }

  public function testTitleIsEmptyByDefault()
  {
    $this->assertEmpty($this->article->title);
  }

  public function testSlugEmptyWithNoTitle()
  {
    $this->assertSame($this->article->getSlug(), "");
  }

  // public function testSlugHasSpacesReplacedByUnderscores()
  // {
  //   $this->article->title = "An example article";
    
  //   $this->assertEquals($this->article->getSlug(),"An_example_article");
  // }

  // public function testSlugHasWhitespaceReplacedBySingleUnderscore()
  // {
  //   $this->article->title = "An    example  \n  article";

  //   $this->assertEquals($this->article->getSlug(),"An_example_article");
  // }

  // public function testSlugDoesNotStartOrEndWithUnderscore()
  // {
  //   $this->article->title = " An example article";

  //   $this->assertEquals($this->article->getSlug(),"An_example_article");
  // }

  // public function testSlugDoesNotHaveAnyNonWordCharacters()
  // {
  //   $this->article->title = "Read! This! Now!";

  //   $this->assertEquals($this->article->getSlug(),"Read_This_Now");
  // }

  public function titleProvider()
  {
      return [
        'Slug Has Spaces Replaced By Underscores'
            => ["An example article", "An_example_article"],
          'SlugHasWhitespaceReplacedBySingleUnderscore'
            => ["An    example  \n  article", "An_example_article"],
          'SlugDoesNotStartOrEndWithUnderscore'
            => [" An example article", "An_example_article"],
          'SlugDoesNotHaveAnyNonWordCharacters'
            => ["Read! This! Now!", "Read_This_Now"],
      ];
  }

  /**
   * @dataProvider titleProvider
   */
  public function testSlug($title, $slug)
  {
      $this->article->title = $title;

      $this->assertEquals($this->article->getSlug(), $slug);
  }

}