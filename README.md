# DesignPatterns

## Creational Design Patterns

###  Singleton

#### Why?

<b style='color:red'> The most important thing that you have to know before using any design pattern is the cause of using. </b></br>
Application needs one, and only one, instance of an object.


#### How?

singleton design pattern says to create a SingleObject class. SingleObject class have its <b>constructor as private</b> and have a <b>static instance</b> of itself.

### Builder

#### Why?

sometimes you need to define complex objects with a lot of arguments in developing the application, so just imagine what happened in constructor of class with a large number of arguments and how much it is difficult to create an instance or developing new features???


#### How?

builder design pattern allows for the step-by-step creation of complex objects using the correct sequence of actions. The construction is controlled by a director object that only needs to know the type of object it is to create.


## Structuraal Design Patterns

### Dependency Injection

#### Why?

sometimes by changing the app or developing new features we have to change the dependency in a class that it cause to change a class that must not be altered. so dependency injection makes a class independent of its dependencies. It means that i avoid the direct dependency from classes to get better maintaning and improve testablity. and in the feature we can extend application easier.


#### How?

It must set a configuration as preparing object and pass it to another class indirectly as it saied inject the dependecy into the class. 


### Facade

#### Why?

when we have a complex system, It is important to hide internal complexity behind a single interface that appears simple from the outside.

#### How?

Example : When we have to start a computer, all we have to do is press the start button. We really do not care what all things go inside the computer hardware and software. It is an example of Facade pattern.
