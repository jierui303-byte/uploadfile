<?php
/**
 * Order.php
 * 文件描述
 * created on 2019/7/22 16:32
 * created by wangruijie
 */

namespace Wrj;


class Order
{
    protected $a;

    protected $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function addTogether()
    {
        return $this->a + $this->b;
    }
}