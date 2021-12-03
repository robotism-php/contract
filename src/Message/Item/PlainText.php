<?php


namespace Robotism\Contract\Message\Item;


class PlainText implements \Robotism\Contract\Message\MessageItem
{
    public string $text;
    public function __construct(string $text){
        $this->text=$text;
    }
    public function __toString(): string
    {
        return $this->text;
    }
}