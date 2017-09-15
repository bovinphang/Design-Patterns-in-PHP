<?php
/**
 * Prototype(原型模式)
 * 有些时候，部分对象需要被初始化多次。而特别是在如果初始化需要耗费大量时间与资源的时候进行预初始化并且存储下这些对象。
 */
interface Product {
}

class Factory {

    private $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function getProduct() {
        return clone $this->product;
    }
}

class SomeProduct implements Product {
    public $name;
}


$prototypeFactory = new Factory(new SomeProduct());

$firstProduct = $prototypeFactory->getProduct();
$firstProduct->name = 'The first product';

$secondProduct = $prototypeFactory->getProduct();
$secondProduct->name = 'Second product';

print_r($firstProduct->name);
// The first product
print_r($secondProduct->name);
// Second product