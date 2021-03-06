<?php

namespace Ascii\Application\Command\Delete;

class DeleteWordCommand
{
    /** @var string */
    private $id;

    /**
     * DeleteWordCommand constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}