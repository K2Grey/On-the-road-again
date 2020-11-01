<?php

require_once 'Car.php';

class Truck extends Car
{
    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $fillingLevel = 0;

    /**
     * Truck constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param int $storageCapacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setStorageCapacity($storageCapacity);
        return $this;
    }

    /**
     * @return string
     */
    public function isFull(): string
    {
        if ($this->fillingLevel < $this->storageCapacity) {
            return 'in filling';
        }
        return 'full';
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     * @return $this
     */
    public function setStorageCapacity(int $storageCapacity)
    {
        if ($storageCapacity >= 0) {
            $this->storageCapacity = $storageCapacity;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getFillingLevel(): int
    {
        return $this->fillingLevel;
    }

    /**
     * @param int $fillingLevel
     * @return $this
     */
    public function setFillingLevel(int $fillingLevel)
    {
        if ($fillingLevel <= $this->storageCapacity) {
            $this->fillingLevel = $fillingLevel;
        }
        return $this;
    }
}
