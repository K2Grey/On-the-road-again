<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /**
     * MotorWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    /**
     * @param object $vehicle
     * @return $this
     */
    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
            $this->currentVehicles[] = $vehicle;
        return $this;
    }
}