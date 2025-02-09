# Singleton Pattern in PHP

## Overview
The **Singleton Pattern** is a design pattern that ensures a class has only **one instance** and provides a **global access point** to that instance. It is commonly used when exactly one object is needed to coordinate actions across the system.

## How It Works
- A **private static property** holds the single instance.
- The **constructor is private**, preventing external instantiation.
- A **public static method (`getInstance()`)** returns the instance, creating it if necessary.
- **Cloning and unserialization are disabled** to maintain a single instance.

## Why Use Singleton?
- **Ensures a single instance is used globally**
- **Prevents unnecessary memory usage** by avoiding multiple instances
- **Useful for managing shared resources** like database connections, configuration settings, logging systems, etc.

## Real-World Example
Imagine a **Database Connection Manager**:
- A web application should use a **single database connection** throughout its execution.
- Creating multiple database connections can consume memory and degrade performance.
- A **Singleton-based Database Connection Manager** ensures that all parts of the application use the same database connection instance, improving efficiency and preventing conflicts.

## When to Use Singleton
Use the Singleton pattern when:
✅ You need to **ensure a single point of control** (e.g., logging, configuration management).
✅ You need to **share a single resource** across multiple parts of an application.
✅ You want to **reduce memory usage** by avoiding multiple instances of the same class.

## When NOT to Use Singleton
❌ If your application requires **multiple independent instances** of a class.
❌ If using **Singleton leads to hidden dependencies**, making code harder to test.

## Running the Code
Simply run the PHP script, and you will see the Singleton pattern in action:
```
php singleton.php
```
Expected Output:
```
Singleton Instance Created.
Executing Singleton Method.
Both instances are the same.
```

## Conclusion
The Singleton pattern is a powerful tool in PHP development, especially when managing shared resources. However, it should be used **carefully** to avoid unnecessary restrictions and maintain code flexibility.

