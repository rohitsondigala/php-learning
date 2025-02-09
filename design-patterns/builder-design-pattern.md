# Builder Pattern in PHP

## Overview
The **Builder Pattern** is a **creational design pattern** that is used to construct complex objects step by step. It provides a way to build an object **piece by piece** and **return the final object when completed**. This pattern is particularly useful when an object has multiple configurations or optional attributes.

## How It Works
- Define a **Product Class** that represents the final complex object.
- Create an **Abstract Builder Interface** that defines the steps for building the product.
- Implement **Concrete Builders** that construct different versions of the product.
- Use a **Director Class** that orchestrates the building process.

## Why Use the Builder Pattern?
- **Encapsulates object creation logic** in separate builder classes.
- **Ensures step-by-step object construction** instead of large constructors.
- **Supports different representations** of an object using the same process.
- **Improves readability** and **code maintainability**.

## Real-World Example
Imagine a **Vehicle Manufacturing System**:
- A factory builds **Cars** and **Bikes**.
- Both vehicles have **wheels, engine, and airbags**, but with different configurations.
- Using the **Builder Pattern**, we can easily construct different vehicle types without modifying the core object structure.

## When to Use the Builder Pattern
✅ When an object has multiple optional configurations.  
✅ When an object construction involves **step-by-step** processing.  
✅ When large constructors with many parameters make object creation **complicated**.  
✅ When you need different representations of the same object (e.g., Car vs. Bike).  

## When NOT to Use the Builder Pattern
❌ If an object has a simple structure and can be instantiated directly.  
❌ If the object does not have multiple optional configurations.  
❌ If object creation is not **complex enough** to require step-by-step construction.  

## Running the Code
Simply execute the PHP script, and you will see the Builder pattern in action:
```
php builder.php
```
Expected Output:
```
Car Specifications:
Vehicle Type: Car
Wheels: 4
Engine: 1500cc
Airbags: Yes

Bike Specifications:
Vehicle Type: Bike
Wheels: 2
Engine: 250cc
Airbags: No
```

## Conclusion
The Builder Pattern is a powerful way to construct complex objects **incrementally and systematically**. It promotes **clean code**, **modularity**, and **separation of concerns** while providing flexibility in object creation. 🚀

