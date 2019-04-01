<?php
abstract class Pokemon
{
    protected $name;
    Protected $type;
    Protected $health;
    Protected $maxHealth;
    Protected $weakness;
    Protected $resistance;
    Protected $attacks;

    public function __get($name)
    {
        return $this->$name;
    }

    public function doDamage($attackPoints, $attacker) {

        if ($this->weakness->name === $attacker->type) {
            $newdmg = $attackPoints * $this->weakness->multiplier;
        }
        else if ($this->resistance->name === $attacker->type) {
            $newdmg = $attackPoints - $this->resistance->multiplier;
        } else {
            $newdmg = $attackPoints;
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
        $this->resistance = new resistance('Fighting', 20);
        $this->weakness = new weakness('Fire', 1.5);
        $this->attacks = [
            new Attack('Electric Ring', 50),
            new Attack('Pika Punch', 20)
        ];
    }
}
class charmeleon extends Pokemon
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = "Fire";
        $this->maxHealth = "60";
        $this->health = $this->maxHealth;
        $this->resistance = new resistance('Lightning', 10);
        $this->weakness = new weakness('Water' , 2);
        $this->attacks = [
            new Attack('Head Butt', 10),
            new Attack('Flare', 30)
        ];
    }
}


