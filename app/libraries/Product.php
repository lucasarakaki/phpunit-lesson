<?php
namespace App\libraries;

class Product
{
    private string $name;

    /**
     * @param string $name Product name
     *
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string Product name
     */
    public function getName(): string
    {
        return $this->name;
    }
}
