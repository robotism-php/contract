<?php


namespace Robotism\Contract\Message;


use Robotism\Contract\Entity\Entity;
use Robotism\Contract\Entity\HumanLikeEntity;
use Robotism\Contract\Message\Item\EntityReference;

class Message extends Entity
{
    public array $items=[];
    public ?HumanLikeEntity $sender;

    /**
     * @return HumanLikeEntity|null
     */
    public function getSender(): ?HumanLikeEntity
    {
        return $this->sender;
    }

    /**
     * @param HumanLikeEntity|null $sender
     */
    public function setSender(HumanLikeEntity $sender):self
    {
        $this->sender = $sender;
        return $this;
    }

    public function append(MessageItem $item):self{
        array_push($this->items,$item);
        return $this;
    }
}