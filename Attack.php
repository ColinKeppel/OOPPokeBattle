<?php
class Attack
{
    public $name;
    public $attackPoints;
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
