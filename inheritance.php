<?php

class Post
{
	protected $title;
	protected $text;
	
	public function __construct(string $title, string $text)
	{
		$this->title = $title;
		$this->text = $text;
	}
	
	public function getTitle () : string
	{
		return $this->title;
	}
	
	public function setTitle (string $title) : void
	{
		$this->title = $title;
	}
	
	public function setText (string $text) : void
	{
		$this->text = $text;
	}
	
	public function getText () : string
	{
		return $this->text;
	}
}

class Lesson extends Post
{
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    public  function getHomework () : string
    {
        return $this->homework;
    }

    public function setHomework (string $homework) : void
    {
        $this->homework = $homework;
    }
}

$lesson = new Lesson('Заголовок', 'Текст', 'Домашка');
echo $lesson->getTitle() . PHP_EOL;
echo $lesson->getText() . PHP_EOL;
echo $lesson->getHomework();