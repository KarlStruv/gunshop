<?php
abstract class WeaponBase implements Weapon
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}