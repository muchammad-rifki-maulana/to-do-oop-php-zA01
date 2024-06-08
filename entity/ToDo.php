<?php

namespace Entity;

class ToDo
{
    public function __construct(private string $toDo = "")
    {
    }

    public function getToDo(): string
    {
        return $this->toDo;
    }
}
