<?php
class HeavyWeapon extends Weapon{

    public function calculateTrajectory() : float
    {
        return ($this->bulletVelocity / 75 + 5) * 2.52;
    }
}
