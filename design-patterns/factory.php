<?php

/**
 * Factory Design Pattern Implementation in PHP
 *
 * The Factory Pattern provides an interface for creating objects in a superclass,
 * but allows subclasses to alter the type of objects that will be created.
 * It helps in managing object creation efficiently.
 */

/**
 * Step 1: Create an interface for the Product
 */
interface Vehicle
{
    public function getType(): string;
}

/**
 * Step 2: Create Concrete Classes implementing the Vehicle interface
 */
class Car implements Vehicle
{
    public function getType(): string
    {
        return "Car";
    }
}

class Bike implements Vehicle
{
    public function getType(): string
    {
        return "Bike";
    }
}

/**
 * Step 3: Create a Factory Class to generate object of concrete classes based on given input
 */
class VehicleFactory
{
    /**
     * Static method to create Vehicle instances based on type
     * 
     * @param string $vehicleType
     * @return Vehicle
     * @throws Exception
     */
    public static function createVehicle(string $vehicleType): Vehicle
    {
        switch (strtolower($vehicleType)) {
            case "car":
                return new Car();
            case "bike":
                return new Bike();
            default:
                throw new Exception("Invalid vehicle type provided.");
        }
    }
}

// --- Testing the Factory Pattern ---

try {
    // Create a Car instance using the Factory
    $car = VehicleFactory::createVehicle("Car");
    echo "Created Vehicle: " . $car->getType() . "\n";

    // Create a Bike instance using the Factory
    $bike = VehicleFactory::createVehicle("Bike");
    echo "Created Vehicle: " . $bike->getType() . "\n";

    // Attempting to create an invalid vehicle type
    $invalid = VehicleFactory::createVehicle("Truck");
    echo "Created Vehicle: " . $invalid->getType() . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>
