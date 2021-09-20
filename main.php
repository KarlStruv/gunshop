<?php

require_once "Products/Weapons/Weapon.php";
require_once "Products/Ammo/Ammo.php";
require_once "Products/Product.php";
require_once "Products/Weapons/WeaponBase.php";
require_once "Products/Ammo/AmmoBase.php";
require_once "Products/WeaponProduct.php";
require_once "Products/AmmoProduct.php";
require_once "Products/Weapons/Rifle.php";
require_once "Products/Weapons/Pistol.php";
require_once "Products/Weapons/MeleeWeapon.php";
require_once "Products/Ammo/RifleAmmo.php";
require_once "Products/Ammo/PistolAmmo.php";
require_once "Store.php";

$store = new Store([
    new WeaponProduct(new Rifle("M4A1"), 3100, 4),
    new WeaponProduct(new Rifle("AK47"), 2700, 2),
    new WeaponProduct(new Pistol("Glock"), 200, 10),
    new WeaponProduct(new Pistol("Luger"), 250),
    new WeaponProduct(new MeleeWeapon("M9 Bayonet"), 300, 2),
    new WeaponProduct(new MeleeWeapon("Katana"), 140, 3),
    new AmmoProduct(new RifleAmmo("7.62 x 51mm(30pack)"), 30, 36),
    new AmmoProduct(new RifleAmmo("7.62 x 39mm(30pack)"), 30, 29),
    new AmmoProduct(new PistolAmmo("9mm(20pack)"), 15, 83),
]);

foreach ($store->products() as $key => $product)
{
    echo "$key. {$product->name()} \${$product->price()} ({$product->amount()})" . PHP_EOL;
}

$search = readline("Enter a product name: ");

$product = $store->search($search);

if($product !== null && $product->amount() > 0){
    echo "{$product->name()} is \${$product->price()}" . PHP_EOL;
}else{
    echo "Product not available." . PHP_EOL;
}