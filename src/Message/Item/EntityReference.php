<?php


namespace Robotism\Contract\Message\Item;


use Robotism\Contract\Entity\Entity;

abstract class EntityReference implements \Robotism\Contract\Message\MessageItem
{
    public Entity $target;
    public function __construct(Entity $target){
        $this->target=$target;
    }
}