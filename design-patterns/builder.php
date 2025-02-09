<?php

/**
 * Builder Design Pattern Implementation in PHP
 *
 * The Builder Pattern is a creational design pattern used to construct complex objects step by step.
 * It allows creating different representations of an object using the same construction process.
 */

/**
 * Step 1: Define the Product (Complex Object)
 */
class Vehicle
{
    public string $type;
    public int $wheels;
    public string $engine;
    public bool $airbags;

    public function showSpecifications(): void
    {
        echo "Vehicle Type: $this->type\n";
        echo "Wheels: $this->wheels\n";
        echo "Engine: $this->engine\n";
        echo "Airbags: " . ($this->airbags ? "Yes" : "No") . "\n";
    }
}

/**
 * Step 2: Create an Abstract Builder Interface
 */
interface VehicleBuilder
{
    public function setType(): void;
    public function setWheels(): void;
    public function setEngine(): void;
    public function setAirbags(): void;
    public function getVehicle(): Vehicle;
}

/**
 * Step 3: Implement Concrete Builders
 */
class CarBuilder implements VehicleBuilder
{
    private Vehicle $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle();
    }

    public function setType(): void
    {
        $this->vehicle->type = "Car";
    }

    public function setWheels(): void
    {
        $this->vehicle->wheels = 4;
    }

    public function setEngine(): void
    {
        $this->vehicle->engine = "1500cc";
    }

    public function setAirbags(): void
    {
        $this->vehicle->airbags = true;
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}

class BikeBuilder implements VehicleBuilder
{
    private Vehicle $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle();
    }

    public function setType(): void
    {
        $this->vehicle->type = "Bike";
    }

    public function setWheels(): void
    {
        $this->vehicle->wheels = 2;
    }

    public function setEngine(): void
    {
        $this->vehicle->engine = "250cc";
    }

    public function setAirbags(): void
    {
        $this->vehicle->airbags = false;
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}

/**
 * Step 4: Create the Director Class
 * The Director controls the construction process.
 */
class VehicleDirector
{
    private VehicleBuilder $builder;

    public function __construct(VehicleBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildVehicle(): Vehicle
    {
        $this->builder->setType();
        $this->builder->setWheels();
        $this->builder->setEngine();
        $this->builder->setAirbags();
        return $this->builder->getVehicle();
    }
}

// --- Testing the Builder Pattern ---
$carBuilder = new CarBuilder();
$bikeBuilder = new BikeBuilder();

// Construct a Car
$carDirector = new VehicleDirector($carBuilder);
$car = $carDirector->buildVehicle();
echo "Car Specifications:\n";
$car->showSpecifications();
echo "\n";

// Construct a Bike
$bikeDirector = new VehicleDirector($bikeBuilder);
$bike = $bikeDirector->buildVehicle();
echo "Bike Specifications:\n";
$bike->showSpecifications();

?>
