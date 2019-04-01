<?php
class resistance
{
    protected $name;
    protected $multiplier;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __construct($name, $multiplier) {
        $this->name = $name;
        $this->multiplier = $multiplier;
    }
}
