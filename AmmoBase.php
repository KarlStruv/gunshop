<?php
abstract class AmmoBase implements Ammo
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getCaliber() : string
    {
        return $this->name;
    }
}
