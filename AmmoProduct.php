<?php
class AmmoProduct implements Product
{
    private Ammo $ammo;
    private int $price;
    private int $amount;

    public function __construct(Ammo $ammo, int $price, int $amount = 1)
    {
        $this->ammo = $ammo;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function name(): string
    {
        return $this->ammo->name();
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