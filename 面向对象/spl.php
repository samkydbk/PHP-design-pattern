<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       index.php
 * @createtime   2019-11-15 10:56
 */

//spl常见数据结构

//栈数据结构
$stack  = new SplStack();
$stack->push("stack1\n");
$stack->push("stack2\n");

echo $stack->pop();
echo $stack->pop();

//队列数据结构
$queue = new SplQueue();
$queue->enqueue("queue1\n");
$queue->enqueue("queue2\n");

echo $queue->dequeue();
echo $queue->dequeue();

//堆数据结构 最小堆
$head = new SplMinHeap();
$head->insert("heap1\n");
$head->insert("heap2\n");

echo $head->extract();
echo $head->extract();

//固定长度的数据
$array = new SplFixedArray(10);
$array[0] = 1;
$array[9] = 9;
var_dump($array);