<?php
class Store
{
    private array $products = [];

    public function __construct(array $products = [])
    {
        foreach ($products as $product){
            if ($product instanceof Product)
            {
                $this->add($product);
            }
        }

    }

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function products() : array
    {
        return $this->products;
    }

    public function search(string $name): ?Product
    {
        foreach ($this->products() as $product)
        {
            if($product->name() === $name)
            {
                return $product;
            }
        }
        return null;
    }


}