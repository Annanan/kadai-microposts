<?php

class Character {
    // クラス変数
    public static $type = '';
    
    public $hp = 1;
    public $power = 1;
    
    function __construct($hp, $power) {
        $this->hp = $hp;
        $this->power = $power;
    }
    
    function name() {
        return $this::$type;
    }
    
    function attack($character) {
        $character->hp = $character->hp - $this->power;
        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた . PHP_EOL;'
    }
}