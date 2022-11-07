<?php

namespace My_Package\Pets;

class Cat
{
    public function __construct(protected $isHungry = false)
    {
        $this->isHungry = $isHungry;
    }

    public function __toString()
    {
        return $this->isHungry ? 'Time to eat milk' : 'Eat milk later';
    }
}
