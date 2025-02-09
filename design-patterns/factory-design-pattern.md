# Factory Pattern in PHP

## Overview
The **Factory Pattern** is a **creational design pattern** that provides an interface for creating objects in a superclass but allows subclasses to alter the type of objects that will be created. It helps manage object creation efficiently without exposing instantiation logic directly in the client code.

## How It Works
- Define an **interface** that specifies a contract for the objects being created.
- Implement **concrete classes** that adhere to the interface.
- Use a **Factory Class** with a static method that determines and returns the appropriate object type based on given input.

## Why Use Factory Pattern?
- **Encapsulates object creation logic** in a single place.
- **Promotes loose coupling** between client code and object creation.
- **Enhances scalability** by making it easy to add new object types.
- **Improves maintainability** by centralizing object creation rules.

## Real-World Example
Imagine an **Online Vehicle Rental System**:
- A customer can rent a **Car** or a **Bike**.
- The system should be able to create a vehicle instance dynamically based on customer selection.
- Using the **Factory Pattern**, we can easily add new vehicle types (e.g., Truck, Bus) without modifying existing code, making the system flexible and maintainable.

## When to Use Factory Pattern
✅ When the exact type of the object is determined at runtime.
✅ When object creation logic is complex and should be centralized.
✅ When you need to avoid tight coupling between object instantiation and client code.
✅ When you want to add new object types without modifying existing code.

## When NOT to Use Factory Pattern
❌ If object creation is simple and does not require encapsulation.
❌ If there is no variation in object types and direct instantiation is sufficient.

## Running the Code
Simply execute the PHP script, and you will see the Factory pattern in action:
```
php factory.php
```
Expected Output:
```
Created Vehicle: Car
Created Vehicle: Bike
Error: Invalid vehicle type provided.
```

## Conclusion
The Factory Pattern is a powerful design pattern in PHP that helps in managing object creation efficiently. It is particularly useful in applications where multiple related object types need to be instantiated dynamically based on conditions.

