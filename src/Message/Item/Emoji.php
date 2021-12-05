<?php


namespace Robotism\Contract\Message\Item;


class Emoji implements \Robotism\Contract\Message\MessageItem
{
    public function toPlain(){
        return new PlainText('');
    }
    static public function fromPlain(PlainText $plain){
        return new Emoji();
    }
}