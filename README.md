# DesignPatterns

## Creational Design Patterns

###  Singleton

#### Why?

<b style='color:red'> The most important thing that you have to know before using any design pattern is the cause of using. </b></br>
Application needs one, and only one, instance of an object.


#### How?

singleton design pattern says to create a SingleObject class. SingleObject class has its <b>constructor as private</b> and a <b>static instance</b> of itself.

### Builder

#### Why?

sometimes you need to define complex objects with a lot of arguments in developing the application, so just imagine what happened in a constructor of class with numerous arguments and how much it is difficult to create an instance or developing new features???


#### How?

builder design pattern allows for the step-by-step creation of complex objects using the correct sequence of actions. The construction is controlled by a director object that only needs to know the type of object it is to create.


## Structural Design Patterns

### Dependency Injection

#### Why?

sometimes by changing the app or developing new features we have to change the dependency in a class that it cause to change a class that must not be altered. so dependency injection makes a class independent of its dependencies. It means that I avoid the direct dependency from classes to get better maintaining and improve testability. so in the feature we can extend application easier.


#### How?

It must set a configuration as preparing object and pass it to another class indirectly as it said inject the dependency into the class. 


### Facade

#### Why?

when we have a complex system, It is important to hide internal complexity behind a single interface that appears simple from the outside.

#### How?

Example : When we have to start a computer, all we have to do is press the start button. We really do not care what all things go inside the computer hardware and software. It is an example of Facade pattern.


## Behavioral Design Patterns

### Observer


#### Why?

whenever the subject change , it's dependencies have to know about this update , but we don't want to call them each time. we want to alert them automatically.

#### How?

The subject will attach to its dependencies (known as observers) and every time it changes, observers notified automatically and whenever it is no need to this , the subject can be detached from observers.

### Strategy


#### Why?

Let's suppose there are some ways for a same issue which the application selects different ways in basis of conditions, so Strategy lets you define a family of algorithms, put each of them into a separate class, and make their objects interchangeable.

#### How?

There is a Context as Strategy Class that decides which class is suitable for this situation, and encapsulate separately algorithms from the client.
