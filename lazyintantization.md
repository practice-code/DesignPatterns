#Lazy Intialization

**Context:(`WHEN TO USE?`)**
- we have factory but we don't know what part of its functionality we need right now.

**Problem:(`WHY USE ?`)**
- Safe replacement of global variable.

**Solution:(`HOW TO ?`)**
- Necessary operations are performed only when they are needed and only once.

**Implementation:(`SYNTAX`)**
```bash
<?php
/**
 * The product
 */
interface Product
{
    /**
     * Returns a name of product
     * @return string
     */
    public function getName();
}

class Factory
{
    /**
     * @var Product
     */
    protected $firstProduct;

    /**
     * @var Product
     */
    protected $secondProduct;

    /**
     * Returns product
     * @return Product
     */
    public function getFirstProduct()
    {
        if(!$this->firstProduct){
            $this->firstProduct = new FirstProduct();
        }
        return $this->firstProduct;
    }

    /**
     * Returns product
     * @return Product
     */
    public function getSecondProduct()
    {
        if (!$this->secondProduct) {
            $this->secondProduct = new SecondProduct();
        }
        return $this->secondProduct;
    }
}

/**
 * First Product
 */
class FirstProduct implements Product
{
    /**
     * Returns a name of product
     * @return string
     */
    public function getName()
    {
        return 'The first product';
    }
}

/**
 * Second Product
 */
class SecondProduct implements Product
{
    /**
     * Returns a name of product
     * @return string
     */
    public function getName()
    {
        return 'Second product';
    }
}

// USING OF LAZY INITIALIZATION
// --------------------
$factory = new Factory();

print_r($factory->getFirstProduct()->getName());
// The first product
print_r($factory->getSecondProduct()->getName());
// Second product
print_r($factory->getFirstProduct()->getName());
// The first product 
```

**Examples:(`USE CASE`)** 
