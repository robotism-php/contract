<?php


namespace Robotism\Contract\Message\Item;


abstract class Emoji implements \Robotism\Contract\Message\MessageItem
{
    abstract public function toPlain();
    abstract public function fromPlain(PlainText $plain);
}