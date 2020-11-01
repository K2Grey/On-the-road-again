<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles;

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;

    /**
     * HighWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract function addVehicle(object $vehicle);

    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     * @return $this
     */
    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return $this
     */
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return $this
     */
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
}