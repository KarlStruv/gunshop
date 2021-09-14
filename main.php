<?php declare(strict_types=1);


require_once "Weapon.php";
require_once "HeavyWeapon.php";
require_once "HandGun.php";
require_once "Store.php";

$weapons = new Store([
    new HeavyWeapon("M4A1", 2890,"HA" , 1500),
    new HeavyWeapon("M1 Carbine", 2000, "HA", 1350),
    new HandGun("Luger", 2000, "HG", 450)
]);

$weapons->displayStore();
$weapons->buyWeapon();


//// Lūdzu mani nelinčot par ieroču atļaujas noteikšanas funkcijas neievietošanu. Saprotu, ka fokuss uzdevumā ir par
/// inheritance izprašanu un izmantošanu. Mācos OOP visu dienu un esmu ļoti noguris.
