<?php


namespace Robotism\Contract\Message\Item;


class Emoji implements \Robotism\Contract\Message\MessageItem
{
    abstract public function toPlain();
    abstract static public function fromPlain(PlainText $plain);
}