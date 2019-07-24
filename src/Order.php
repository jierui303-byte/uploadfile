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
        //这里可以进行数据库主从配置连接, 形成一个数据库连接池, 保持长连接, 随取随用
        $this->a = $a;
        $this->b = $b;
    }

    public function addTogether()
    {
        return $this->a + $this->b;
    }
}