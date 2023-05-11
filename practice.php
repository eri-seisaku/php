<?php

// クラスの復習1 public -----------------------------------------

class Article{
    public $title;
    public $text;
}

$blog1 = new Article();
$blog2 = new Article();

$blog1->title = 'タイトル1';
$blog2->title = 'タイトル2';

$blog1->text = 'テキスト1';
$blog2->text = 'テキスト2';

echo $blog1->title;
echo $blog1->text;
echo "\n";
echo $blog2->title;
echo $blog2->text;
echo "\n";

// クラスの復習2 progate引用 -----------------------------------------

// Menuという設計図(class)にはnameのいう料理名(プロパティ=データ)が書いています
class Menu {
  public $name; // public $プロパティ名
}

// Menuの設計図を使って新しくcurry(メニュー)を作ります
$curry = new Menu();

// curry(メニュー)に料理名を入れます
$curry->name = 'chicken curry';

// curry(メニュー)に入れた料理名を呼び出してみます
echo "カレーのメニュー表に書いてある料理名は", $curry->name, "です。";
echo "\n";

// var_dump();でも確認
var_dump($curry);

echo "\n";

// クラスの復習3 アクセサ -----------------------------------------

class User{
    // プロパティ
    private $name;

    // メソッド
    public function defaultName(){
        echo "太郎 \n";
    }

    //アクセサ
    public function setName($i){
        $this->name = $i;
    }
    public function getName(){
        return $this->name;
    }
}

$user1 = new User();
$user1->defaultName(); // メソッドを呼び出す
// echo $user1->name; // publicなら出来るけどprivateではエラーになる
$user1->setName('花子'); // プロパティの値を太郎->花子に変更
echo $user1->getName(); // プロパティの値(花子)を呼び出す

echo "\n";

// クラスの復習4 オブジェクト定数 -----------------------------------------

// 定数はすべて大文字で書くこと
define('DEF_INT', 123);
var_dump( DEF_INT );

echo "\n";

class MyClass{
    const HOGE = 'string';
}
var_dump( MyClass::HOGE );

// クラスの復習5 コンストラクタとデストラクタ -----------------------------------------

class OriginClass
{
    // オブジェクト定数の宣言
    const TITLE = 'コンストラクタとデストラクタ';

    // コンストラクタ
    public function __construct()
    {
        echo "自動で動きます \n";
    }

    // デストラクタ
    public function __destruct()
    {
        echo "終了時に動きます \n";
    }
}
// オブジェクト定数を呼び出す
var_dump( OriginClass::TITLE );

// インスタンス（オブジェクト）を作成する
$obj = new OriginClass();

// クラスの復習6 継承 -----------------------------------------

class parentClass // 親クラス
{
    public function parentMethod()
    {
        echo "親クラス 内 親メソッド \n";
    }
    public function method()
    {
        echo "親クラス 内 メソッド \n";
    }
}

class childClass extends parentClass  // 子クラス
{
    public function childMethod()
    {
        echo "子クラス 内 子メソッド \n";
    }
    public function method()
    {
        echo "子クラス 内 メソッド \n";
    }
}

$child = new childClass();
$child->parentMethod();
$child->childMethod();
$child->method();

$parent = new parentClass();
$parent->parentMethod();
$parent->method();

// クラスの復習7 インタフェース -----------------------------------------

interface interfaceA
{
    public function methodA();
}
interface interfaceB
{
    public function methodB(int $i);
}

class Hoge implements interfaceA, interfaceB
{
    public function methodA()
    {
        echo "メソッドA \n";
    }
    public function methodB(int $i)
    {
        echo "メソッドB {$i} \n";
    }
}

//
$obj = new Hoge();
var_dump($obj);
$obj->methodA();
$obj->methodB(2);

// クラスの復習8 抽象化 -----------------------------------------

abstract class abstractClass
{
    abstract public function abstractMethod();

    public function method()
    {
        echo "普通のメソッド \n";
    }
}

//
class childClass2 extends abstractClass
{
    public function abstractMethod()
    {
        echo "子クラスで実装した抽象のメソッド \n";
    }
}

//
$obj = new childClass2();
$obj->method();
$obj->abstractMethod();

// クラスの復習9 Trait -----------------------------------------

// Traitの宣言
trait parts
{
    public function traitMethod()
    {
        echo "Traitのメソッド \n";
    }
}
class myClass2
{
    use parts; // traitの使用宣言

    public function myClass2Method()
    {
        echo "クラスのメソッド \n";
    }
}

//
$obj = new myClass2();
$obj->myClass2Method();
$obj->traitMethod();

// クラスの復習10 静的メソッドの作成 -----------------------------------------

class myClass3
{
    private static $staticProperty;

    public static function staticMethod()
    {
        echo "静的なメソッド \n";
    }
    //
    public static function setStaticProperty($v)
    {
        static::$staticProperty = $v;
    }

    public static function getStaticProperty()
    {
        return static::$staticProperty;
    }
}
//
myClass3::staticMethod();

myClass3::setStaticProperty("set string");
echo myClass3::getStaticProperty() , "\n";

// アロー演算子 -> で書き直す
class myClass4
{
    private $Propaty;

    public function useArrowMethod()
    {
        echo "静的なメソッド \n";
    }
    // アクセサ
    public function setPropaty($v)
    {
        $this->propaty = $v;
    }
    public function getPropaty()
    {
        return $this->propaty;
    }
}
$obj = new myClass4();
$obj->useArrowMethod();
$obj->setPropaty("set string");
echo $obj->getPropaty(), "\n";

// 演習問題 再挑戦 -----------------------------------------

// 問題1
class MyTest1{

    public function add($i, $j)
    {
        return $i + $j;
    }
    public function sub($i, $j)
    {
        return $i - $j;
    }

}

$obj = new MyTest1();
echo $obj->add(1, 2), "\n";
echo $obj->sub(10, 7), "\n";

// 問題2
class MyTest2{
    private $price;
    private $name;

    // price
    public function setPrice($int)
    {
        $this->price = $int;
    }
    public function getPrice()
    {
        return $this->price;
    }

    // name
    public function setName($string)
    {
        $this->name = $string;
    }
    public function getName()
    {
        return $this->name;
    }
}

//
$obj = new MyTest2();
$obj->setPrice(120);
$obj->setName("円のお菓子です");
echo $obj->getPrice();
echo $obj->getName();
?>