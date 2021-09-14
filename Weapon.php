<?php
class Weapon{
    protected string $weapon;
    protected int $bulletVelocity;
    protected string $licenseRequirement;
    protected int $price;

    public function __construct(string $weapon, int $bulletVelocity, string $licenseRequirement, int $price)
    {
        $this->weapon = $weapon;
        $this->bulletVelocity = $bulletVelocity;
        $this->licenseRequirement = $licenseRequirement;
        $this->price = $price;
    }
    public function getWeapon() : string
    {
        return $this->weapon;
    }
    public function getLicenseRequirement() : string
    {
        return $this->licenseRequirement;
    }
    public function getPrice() : int
    {
        return $this->price;
    }
    public function calculateTrajectory() : float
    {
        return $this->bulletVelocity;
    }
}

