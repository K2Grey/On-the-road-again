<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    /**
     * MotorWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    /**
     * @param object $vehicle
     * @return $this
     */
    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Vehicle)
            $this->currentVehicles[] = $vehicle;
        return $this;
    }
}