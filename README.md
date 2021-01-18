# DesignPatterns

## Creational Design Patterns

###  Singleton

#### Why?

<b style="color:red"> The most important thing that you have to know before using any design pattern is the cause of using. </b>
Application needs one, and only one, instance of an object.


#### How?

singleton design pattern says to create a SingleObject class. SingleObject class have its <b>constructor as private</b> and have a <b>static instance</b> of itself.

### Builder

#### Why?

sometimes you need to define complex objects with a lot of arguments in developing the application, so just imagine what happened in constructor of class with a large number of arguments and how much it is difficult to create an instance or developing new features???


#### How?

builder design pattern allows for the step-by-step creation of complex objects using the correct sequence of actions. The construction is controlled by a director object that only needs to know the type of object it is to create.
