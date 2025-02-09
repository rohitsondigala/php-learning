# Proxy Pattern in PHP

## Overview
The **Proxy Pattern** is a **structural design pattern** that acts as an intermediary between the client and the real object. It controls access to the real object, improving performance, security, or functionality.

## How It Works
- Define a **common interface** for both the real object and the proxy.
- Implement the **Real Object**, which performs the actual operations.
- Implement the **Proxy Object**, which controls access to the real object and may include additional functionalities like caching, logging, or authentication.

## Why Use the Proxy Pattern?
- **Lazy Initialization**: Delay the creation of resource-intensive objects until needed.
- **Access Control**: Restrict unauthorized access to sensitive objects.
- **Logging & Monitoring**: Keep track of object usage.
- **Caching**: Store and reuse previously computed data instead of recalculating.
- **Security & Authentication**: Authenticate users before accessing real objects.

## Real-World Example
Imagine a **Photo Viewer Application**:
- The application loads high-resolution images from disk.
- If users repeatedly view the same image, it gets loaded **multiple times**, slowing down the experience.
- Using the **Proxy Pattern**, images are loaded **only when needed**, and cached to avoid unnecessary disk operations.

## When to Use the Proxy Pattern
✅ When working with **heavy objects** that should not be loaded until necessary (Lazy Loading).  
✅ When adding **security layers** to control access to an object.  
✅ When implementing **caching mechanisms** to store expensive computations.  
✅ When adding **logging, debugging, or monitoring features** to track object usage.  

## When NOT to Use the Proxy Pattern
❌ If direct access to the object is **simple and lightweight**.  
❌ If the object **does not require** access control, caching, or additional functionality.  
❌ If adding a proxy **adds unnecessary complexity** without significant benefits.  

## Running the Code
Simply execute the PHP script to see the Proxy pattern in action:
```
php proxy.php
```
Expected Output:
```
Using RealImage directly:
Loading image from disk: photo1.jpg
Displaying image: photo1.jpg

Using ProxyImage:
Loading image from disk: photo2.jpg
Displaying image: photo2.jpg
Displaying image: photo2.jpg
```

## Conclusion
The Proxy Pattern is **highly useful** when controlling access to expensive or sensitive objects. It enhances **performance, security, and resource efficiency** while keeping object interactions flexible and modular. 🚀

