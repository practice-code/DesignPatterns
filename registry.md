#Registry

**Context:(`WHEN TO USE?`)**
- Access data through static methods.

**Problem:(`WHY USE ?`)** 
- Safe replacement of global variable.

**Solution:(`HOW TO ?`)**

**Implementation:(`SYNTAX`)**
```bash 
<?php
/**
 * Registry
 */
class Products
{
    /**
     * @var mixed[]
     */
    protected static $data = array();

    /**
     * Add value to the Registry
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * Returns value from Registry by key
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    /**
     * Removes value from Registry by key
     * @param string $key
     * @return void
     */
    final public static function removeProduct($key)
    {
        if(array_key_exists($key, self::$data)){
            unset(self::$data[$key]);
        }
    }
}

// REGISTRY USAGE
// --------------------
// Set new computer
Products::set('new_computer', 'Apple');
// Get new computer
print_r(Products::get('new_computer'));
// Output: Apple
```

**Examples:(`USE CASE`)** 