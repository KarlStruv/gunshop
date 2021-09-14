<?php
class Store  {
    private array $weapons;

    public function __construct(array $weapons)
    {
        foreach ($weapons as $weapon){
            $this->addWeapon($weapon);
        }
    }

    public function addWeapon($weapon)
    {
        $this->weapons[] = $weapon;
    }

    public function displayStore(){
        foreach ($this->weapons as $key => $weapon){
            echo "$key. {$weapon->getWeapon()} {$weapon->getPrice()}$ {$weapon->calculateTrajectory()} " . PHP_EOL;
        }
    }

    public function buyWeapon()
    {
        $selection = (int)readline("Which weapon would you like to buy? ");

        if ($selection < 0 || $selection > (count($this->weapons) - 1)){
            echo "Invalid selection." . PHP_EOL;
            exit;
        }

        $boughtWeapon = $this->weapons[$selection];

        echo "You just bought a {$boughtWeapon->getWeapon()} for {$boughtWeapon->getPrice()}$" . PHP_EOL;
    }
}