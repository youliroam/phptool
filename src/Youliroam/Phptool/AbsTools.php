<?php
namespace youliroam\phptool;

abstract class AbsTools{
    const test = '123';
    /**
     * index
     */
    public function test(){}


    /**
     * getuid
     */
    public function getuid(){}


    /**
     * @param $date1    20200421;
     * @param $date2    20191111;
     * @return float|int
     * 获取两个时间的月数差
     */
    public function month_dif($date1, $date2){}

    /**
     * 获取当前文档路径
     */
    public function getPwd(){}
}