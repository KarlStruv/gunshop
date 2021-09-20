<?php
class WeaponProduct implements Product
{
    private Weapon $weapon;
    private int $price;
    private int $amount;

    public function __construct(Weapon $weapon, int $price, int $amount = 1)
    {
        $this->weapon = $weapon;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function name(): string
    {
        return $this->weapon->name();
    }

    public function price() : int
    {
        return $this->price;
    }

    public function amount(): int
    {
        return $this->amount;
    }

}
