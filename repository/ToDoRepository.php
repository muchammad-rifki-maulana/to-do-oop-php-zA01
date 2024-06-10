<?php

namespace Repository;

use Entity\ToDo;

interface ToDoRepository
{
    public function save(ToDo $toDo): void;
    public function remove(int $number): bool;
    public function findAll(): array;
}

class ToDoRepositoryImpl implements ToDoRepository
{
    private array $toDo = [];

    public function save(ToDo $toDo): void
    {
        $this->toDo[] = $toDo;
    }

    public function remove(int $number): bool
    {
        if ($number > count($this->toDo) || $number < 1) {
            return false;
        }

        array_splice($this->toDo, $number - 1, 1);
        return true;
    }

    public function findAll(): array
    {
        return $this->toDo;
    }
}
