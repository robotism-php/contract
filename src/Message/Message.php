<?php


namespace Robotism\Contract\Message;


use Robotism\Contract\Entity\Entity;
use Robotism\Contract\Entity\HumanLikeEntity;
use Robotism\Contract\Message\Item\EntityReference;

class Message extends Entity
{
    public array $items=[];
    public HumanLikeEntity $sender;
}