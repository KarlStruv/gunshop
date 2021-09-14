<?php
class HandGun extends Weapon{

    public function calculateTrajectory() : float
    {
        return ($this->bulletVelocity / 130 + 5) * 2.45;
    }
}