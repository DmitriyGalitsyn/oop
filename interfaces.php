<?php

interface CalculateSquare
{
    /**
     * CalculateSquare interface.
     */
    public function calculateSquare () : float;
}

class Rectangle //implements CalculateSquare
{
    private $x;
    private $y;

    /**
     * Rectangle constructor.
     * @param float $x
     * @param float $y
     */
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function calculateSquare () : float
    {
        return $this->x * $this->y;
    }
}

class Square implements CalculateSquare
{
    private $x;

    /**
     * Square constructor.
     * @param float $x
     */
    public function __construct(float $x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function calculateSquare() : float
    {
        return $this->x ** 2;
    }
}

class Circle implements CalculateSquare
{
    const PI = 3.1416;

    private $r;

    /**
     * Circle constructor.
     * @param float $r
     */
    public function __construct(float $r)
    {
        $this->r = $r;
    }

    /**
     * @return float
     */
    public function calculateSquare () : float
    {
        return self::PI * ($this->r ** 2);
    }
}

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5)
    ];

foreach ($objects as $object){
    if ($object instanceof CalculateSquare) {
        echo 'Объект ' . get_class($object). ' реализует интерфейс CalculateSquare. Площадь: ' . $object->calculateSquare() . PHP_EOL;
    }
}
