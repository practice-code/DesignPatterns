#Multiton (Singleton Pool)

**Context:(`WHEN TO USE?`)**
- Seperate logic of template with implementation.

**Problem:(`WHY USE ?`)**

**Solution:(`HOW TO ?`)**

**Implementation:(`SYNTAX`)**

```bash
 
<?php
/**
 * The common interface of Object Pool
 */
abstract class FactoryAbstract
{
    /**
     * @var array
     */
    protected static $instances = array();

    /**
     * Returns an instance of class then was called
     * @return static
     */
    public static function getInstance()
    {
        $className = static::getClassName();
        if(!(self::$instances[$className] instanceof $className)){
            self::$instances[$className] = new $className();
        }
        return self::$instances[$className];
    }

    /**
     * Removes an instance of class 
     * @return void
     */
    public static function removeInstance()
    {
        $className = static::getClassName();
        if(array_key_exists($className, self::$instances)){
            unset(self::$instances[$className]);
        }
    }

    /**
     * Returns an instance of class
     * @return string
     */
    final protected static function getClassName()
    {
        return get_called_class();
    }

    /**
     * Construct is closed
     */
    protected function __construct() {}

    /**
     * Cloning is prohibited
     */
    final protected function __clone() {}

    /**
     * Serialization is prohibited
     */
    final protected function __sleep() {}

    /**
     * Deserialization is prohibited
     */
    final protected function __wakeup() {}
}

/**
 * Interface of Object Pool
 */
abstract class Factory extends FactoryAbstract
{
    /**
     * It returns an instance of the class from which it was called
     * @return static
     */
    final public static function getInstance()
    {
        return parent::getInstance();
    }

    /**
     * Removes an instance of class
     * @return void
     */
    final public static function removeInstance()
    {
        parent::removeInstance();
    }
}

// MULTITON USAGE
// --------------------
/**
 * First Singleton
 */
class FirstProduct extends Factory
{
    public $a = array();
}

/**
 * Second Singleton
 */
class SecondProduct extends FirstProduct
{
}

// Fill properties of singletons
FirstProduct::getInstance()->a[] = 1;
SecondProduct::getInstance()->a[] = 2;
FirstProduct::getInstance()->a[] = 3;
SecondProduct::getInstance()->a[] = 4;

print_r(FirstProduct::getInstance()->a);
// Output: array(1, 3)
print_r(SecondProduct::getInstance()->a);
// Output: array(2, 4)

?>  
```

**Examples:(`USE CASE`)** 
