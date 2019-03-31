<?php
abstract class Pokemon
{
    protected $name;
    Protected $type;
    Protected $health;
    Protected $maxHealth;
    Protected $weakness;
    Protected $weaknessMp;
    Protected $resitance;
    Protected $resitanceMp;
    Protected $attacks;

    public function __get($name)
    {
        return $this->$name;
    }


    public function doDamage($attackPoints, $attacker) {
        if ($this->weakness === $attacker->type) {
            $newdmg = $attackPoints * $this->weaknessMp;
        }
        if ($this->resitance === $attacker->type) {
            $newdmg = $attackPoints - $this->resitanceMp;
        }
        $this->health = $this->health - $newdmg;
        return $this->health;
    }
}

class pikachu extends Pokemon
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = "Lightning";
        $this->maxHealth = "60";
        $this->health = $this->maxHealth;
        $this->weakness = "Fire";
        $this->weaknessMp = 1.5;
        $this->resitance = "Fighting";
        $this->resitanceMp = 20;
        $this->attacks = [new Attack('Electric Ring', 50),
            new Attack('Pika Punch', 20)];
    }
}
class charmeleon extends Pokemon
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = "Fire";
        $this->maxHealth = "60";
        $this->health = $this->maxHealth;
        $this->weakness = "Water";
        $this->weaknessMp = 2;
        $this->resitance = "Lightning";
        $this->resitanceMp = 10;
        $this->attacks = [new Attack('Head Butt', 10),
            new Attack('Flare', 30)];
    }
}

