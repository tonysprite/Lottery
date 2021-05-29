<?php
/**
 * 双色球随机生成器
 */
namespace Lottery;
class Producers
{
    const BLUE_NUM=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];//蓝色球范围
    const BLUE_TIME=1;//蓝色球次数
    const RED_NUM=[
        1,2,3,4,5,6,7,8,9,10,
        11,12,13,14,15,16,17,18,19,20,
        21,22,23,24,25,26,27,28,29,30,
        31,32,33
    ];//红色球范围
    const RED_TIME=6;//红色球次数
    const BALL_STRUCT=[//球组合结构
        'blue'=>[
            'num'=>self::BLUE_NUM,
            'limit'=>self::BLUE_TIME,
        ],
        'red'=>[
            'num'=>self::RED_NUM,
            'limit'=>self::RED_TIME,
        ],
    ];

    private $redGroups=[];
    public function getNumGroup()
    {
        $group=[
            'blue'=>$this->getBlue(),
            'red'=>$this->getRedArr(),
        ];
        return $group;
    }

    public function getBlue()
    {
        return rand(1,16);
    }

    public function getRed()
    {
        $red= rand(1,33);
        if(in_array($red,$this->redGroups)){
            $red=$this->getRed();
        }
        return $red;
    }

    public function getRedArr()
    {
        $this->redGroups[0]=$this->getRed();
        $this->redGroups[1]=$this->getRed();
        $this->redGroups[2]=$this->getRed();
        $this->redGroups[3]=$this->getRed();
        $this->redGroups[4]=$this->getRed();
        $this->redGroups[5]=$this->getRed();
        return $this->redGroups;
    }
}