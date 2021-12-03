<?php


namespace Robotism\Contract\Entity;


abstract class HumanLikeEntity extends Entity
{
    public string $name;

    /**
     * 获取名称
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 设置名称
     * @param string $name
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}