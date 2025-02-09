<?php

/**
 * Proxy Design Pattern Implementation in PHP
 *
 * The Proxy Pattern is a structural design pattern that provides a substitute or placeholder 
 * for another object to control access to it.
 *
 * Common Use Cases:
 * - Controlling access to a resource-intensive object (Lazy Initialization)
 * - Adding security layers (Authentication Proxy)
 * - Logging requests before passing them to the real object
 * - Caching results to avoid redundant computations
 */

/**
 * Step 1: Define the Subject Interface
 * This interface defines the common methods that both the real object and proxy will implement.
 */
interface Image
{
    public function display(): void;
}

/**
 * Step 2: Create the Real Subject
 * This is the actual object that does the heavy lifting, e.g., loading an image from disk.
 */
class RealImage implements Image
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->loadFromDisk();
    }

    private function loadFromDisk(): void
    {
        echo "Loading image from disk: {$this->filename}\n";
    }

    public function display(): void
    {
        echo "Displaying image: {$this->filename}\n";
    }
}

/**
 * Step 3: Create the Proxy Class
 * The proxy controls access to the real object and may add additional functionality.
 */
class ProxyImage implements Image
{
    private ?RealImage $realImage = null;
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function display(): void
    {
        // Lazy initialization: Load the image only when needed
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->filename);
        }
        $this->realImage->display();
    }
}

/**
 * Step 4: Testing the Proxy Pattern
 */

// Without Proxy: The image is always loaded from disk, even if it’s displayed multiple times.
echo "Using RealImage directly:\n";
$image1 = new RealImage("photo1.jpg");
$image1->display();
echo "\n";

// With Proxy: The image is loaded from disk only when first accessed.
echo "Using ProxyImage:\n";
$image2 = new ProxyImage("photo2.jpg");
$image2->display(); // Loads image from disk
$image2->display(); // Uses already loaded image (no disk access)

?>
