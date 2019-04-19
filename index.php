<?php
namespace Storm;

class Woman{
    public function  __construct($name="default")
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

$amaka = new Woman();
echo $amaka->getName();