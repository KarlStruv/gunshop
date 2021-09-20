<?php

interface Product
{
    public function name(): string;
    public function price(): int;
    public function amount(): int;
}
