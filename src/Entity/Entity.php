<?php


namespace Robotism\Contract\Entity;


abstract class Entity
{
    public ?string $id;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
}