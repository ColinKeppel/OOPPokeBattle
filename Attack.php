<?php
class Attack
{
    protected $name;
    protected $attackPoints;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __construct($name, $attack_points) {
        $this->name = $name;
        $this->attackPoints = $attack_points;
    }

    public function execute($target, $attacker) {
        if($target === null || $attacker === null) {
            die('Error');
        }
        return $target->doDamage($this->attackPoints, $attacker);
    }
}
