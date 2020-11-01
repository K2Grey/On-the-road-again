<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    /**
     * MotorWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    /**
     * @param object $vehicle
     * @return $this
     */
    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Car)
            $this->currentVehicles[] = $vehicle;
        return $this;
    }
}