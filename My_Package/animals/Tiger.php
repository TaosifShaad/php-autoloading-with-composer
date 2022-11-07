<?php

namespace My_Package\animals;

class Tiger
{
    public function __construct(protected $isHungry = false)
    {
        $this->isHungry = $isHungry;
    }

    public function __toString()
    {
        return $this->isHungry ? 'Time to eat' : 'Eat you later';
    }
}
