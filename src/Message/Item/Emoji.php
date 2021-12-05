<?php


namespace Robotism\Contract\Message\Item;


class Emoji implements \Robotism\Contract\Message\MessageItem
{
    public function toPlain();
    static public function fromPlain(PlainText $plain);
}