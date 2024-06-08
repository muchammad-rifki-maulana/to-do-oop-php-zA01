<?php

namespace Service;

interface ToDoService
{
    public function showToDo(): void;
    public function addToDo(string $toDo): void;
    public function removeToDo(int $number): void;
}
