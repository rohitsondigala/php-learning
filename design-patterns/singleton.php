<?php

/**
 * Singleton Pattern Implementation in PHP
 * 
 * The Singleton pattern ensures that a class has only one instance
 * and provides a global access point to that instance.
 */
class SingletonExample
{
    // Holds the single instance of the class
    private static ?SingletonExample $instance = null;

    // Private constructor prevents instantiation from outside
    private function __construct()
    {
        echo "Singleton Instance Created.\n\n";
    }

    // Prevent cloning of the instance
    private function __clone() {}

    // Prevent unserialization of the instance
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    /**
     * Get the single instance of the class
     * 
     * @return SingletonExample
     */
    public static function getInstance(): SingletonExample
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Example method to demonstrate Singleton usage
     */
    public function doSomething()
    {
        echo "Executing Singleton Method.\n\n";
    }
}

// --- Testing the Singleton Pattern ---

// Getting Singleton instance
$singleton1 = SingletonExample::getInstance();
$singleton1->doSomething();

// Trying to get another instance
$singleton2 = SingletonExample::getInstance();

// Checking if both instances are the same
if ($singleton1 === $singleton2) {
    echo "Both instances are the same.\n\n";
} else {
    echo "Instances are different, Singleton is not working properly.\n\n";
}

?>
