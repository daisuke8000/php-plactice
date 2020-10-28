<?php

//抽象クラス
abstract class ProductAbstract{
    public function echoProduct(){
        echo '親クラスです';
    }
    //override
    abstract public function getProduct();
}

//具象クラス
class BaseProduct{
    public function echoProduct(){
        echo '親クラスです';
    }
    //override
    public function getProduct(){
        echo '親の関数です。';
    }
}


class Product extends ProductAbstract {

    // アクセス修飾子, private, Protected, public
    
    // 変数
    private $product = [];
    // 関数
    function __construct($product){
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }
    
    public function addProduct($item){
        $this->product .= $item;
    }

    public static function getStaticProduct($str){
        echo $str;
    }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

//親クラスのメソッド
$instance->echoProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';