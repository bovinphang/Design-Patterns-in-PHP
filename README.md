# [PHP 实战之设计模式]



有经验的开发者肯定对于设计模式非常熟悉，但是本文主要是针对那些初级的开发者。首先我们要搞清楚到底什么是设计模式，设计模式并不是一种用来解释的模式，它们并不是像链表那样的常见的数据结构，也不是某种特殊的应用或者框架设计。事实上，设计模式的解释如下：

> descriptions of communicating objects and classes that are customized to solve a general design problem in a particular context.

另一方面，设计模式提供了一种广泛的可重用的方式来解决我们日常编程中常常遇见的问题。设计模式并不一定就是一个类库或者第三方框架，它们更多的表现为一种思想并且广泛地应用在系统中。它们也表现为一种模式或者模板，可以在多个不同的场景下用于解决问题。设计模式可以用于加速开发，并且将很多大的想法或者设计以一种简单地方式实现。当然，虽然设计模式在开发中很有作用，但是千万要避免在不适当的场景误用它们。

目前常见的设计模式主要有23种，根据使用目标的不同可以分为以下三大类：

- 创建模式：用于创建对象从而将某个对象从实现中解耦合。
- 架构模式：用于在不同的对象之间构造大的对象结构。
- 行为模式：用于在不同的对象之间管理算法、关系以及职责。

具体如下：

### 一、5种创建型模式：

1. [工厂方法模式(factory_method) ](factory_method/factory_method.php)
2. [抽象工厂模式(abstract_factory) ](abstract_factory/abstract_factory.php)
3. [单例模式(singleton) ](singleton/singleton.php)
4. [建造者模式(builder) ](builder/builder.php)
5. [原型模式(prototype) ](prototype/prototype.php)

### 二、7种结构型模式：

1. [适配器模式(adapter) ](adapter/adapter.php)
2. [桥接模式(bridge) ](bridge/bridge.php)
3. [合成模式(composite) ](composite/composite.php)
4. [装饰器模式(decorator) ](decorator/decorator.php)
5. [门面模式(facade) ](facade/facade.php)
6. [代理模式(proxy) ](proxy/proxy.php)
7. [享元模式(flyweight) ](flyweight/flyweight.php)

### 三、11种行为型模式：

1. [策略模式(strategy) ](strategy/strategy.php)

2. [模板方法模式(template_method) ](template_method/template_method.php)

3. [观察者模式(observer) ](observer/observer.php)

4. [迭代器模式(decorator) ](decorator/decorator.php)

5. [责任链模式(responsibility_chain) ](responsibility_chain/responsibility_chain.php)

6. [命令模式(command) ](command/command.php)

7. [备忘录模式(memento) ](memento/memento.php)

8. [状态模式(state) ](state/state.php)

9. [访问者模式(visitor) ](visitor/visitor.php)

10. [中介者模式(mediator) ](mediator/mediator.php)

11. [解释器模式(interpreter) ](interpreter/interpreter.php)

### 四、设计模式之七大原则：

**1、开放封闭原则(Open Close Principler)：**一个软件实体如类、模块和函数应该对扩展开放，对修改关闭。 在程序需要进行拓展的时候，不能去修改原有的代码，而是要扩展原有代码，实现一个热插拔的效果。所以一句话概括就是：为了使程序的扩展性好，易于维护和升级。想要达到这样的效果，我们需要使用接口和抽象类等。这是总原则。

**2、里氏替换原则(Liskov Substitution Principler,LSP)：**所有引用基类的地方必须能透明地使用其子类的对象。任何基类可以出现的地方，子类一定可以出现。 LSP是继承复用的基石，只有当衍生类可以替换掉基类，软件单位的功能不受到影响时，基类才能真正被复用，而衍生类也能够在基类的基础上增加新的行为。里氏代换原则是对“开-闭”原则的补充。实现“开-闭”原则的关键步骤就是抽象化。而基类与子类的继承关系就是抽象化的具体实现，所以里氏代换原则是对实现抽象化的具体步骤的规范。 里氏代换原则中，子类对父类的方法尽量不要重写和重载。因为父类代表了定义好的结构，通过这个规范的接口与外界交互，子类不应该随便破坏它。

**3、依赖倒置原则(Dependence Inversion Principle,DIP)：**高层模块不应该依赖低层模块，二者都应该依赖其抽象；抽象不应该依赖细节；细节应该依赖抽象。 这个是开闭原则的基础，具体内容：面向接口编程，依赖于抽象而不依赖于具体。写代码时用到具体类时，不与具体类交互，而与具体类的上层接口交互。

**4、单一职责原则(Single responsibility principle,SRP)：**又称单一功能原则，不要存在多于一个导致类变更的原因。通俗的说，即一个类只负责一项职责，也就是说每个类应该实现单一的职责，如若不然，就应该把类拆分。单一职责原则并不是一个孤立的面向对象设计原则。

**5、接口隔离原则(Interface Segregation Principle,ISP)：**客户端不应该依赖它不需要的接口；一个类对另一个类的依赖应该建立在最小的接口上。  即每个接口中不存在子类用不到却必须实现的方法，如果不然，就要将接口拆分。使用多个隔离的接口，比使用单个接口（多个接口方法集合到一个的接口）要好。

**6、迪米特法则(Demeter Principle,DP)：**也又称最少知道原则，一个对象应该对其他对象保持最少的了解。 即一个类对自己依赖的类知道的越少越好。也就是说无论被依赖的类多么复杂，都应该将逻辑封装在方法的内部，通过public方法提供给外部。这样当被依赖的类变化时，才能最小的影响该类。最少知道原则的另一个表达方式是：只与直接的朋友通信。类之间只要有耦合关系，就叫朋友关系。耦合分为依赖、关联、聚合、组合等。我们称出现为成员变量、方法参数、方法返回值中的类为直接朋友。局部变量、临时变量则不是直接的朋友。我们要求陌生的类不要作为局部变量出现在类中。

**7、合成复用原则(Composite Reuse Principle, CRP)：**又称为组合/聚合复用原则(Composition/Aggregate Reuse Principle, CARP)，其定义如下：尽量使用对象组合，而不是继承来达到复用的目的。合成复用原则就是在一个新的对象里通过关联关系（包括组合关系和聚合关系）来使用一些已有的对象，使之成为新对象的一部分；新对象通过委派调用已有对象的方法达到复用功能的目的。简言之：复用时要尽量使用组合/聚合关系（关联关系），少用继承。