<?php

namespace Repository;

use Entity\ToDo;

interface ToDoRepository
{
    public function save(ToDo $toDo): void;
    public function remove(int $number): bool;
    public function findAll(): array;
}
