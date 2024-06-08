<?php

namespace Service;

use Entity\ToDo;
use Repository\ToDoRepository;

interface ToDoService
{
    public function showToDo(): void;
    public function addToDo(string $toDo): void;
    public function removeToDo(int $number): void;
}

class ToDoServiceImpl implements ToDoService
{
    public function __construct(private ToDoRepository $toDoRepository)
    {
    }

    public function showToDo(): void
    {
        $toDo = $this->toDoRepository->findAll();

        if ($toDo) {
            foreach ($toDo as $number => $task) {
                echo $number + 1 . ". {$task->getToDo()}\n";
            }
        } else {
            echo "- empty -\n";
        }
    }

    public function addToDo(string $toDo): void
    {
        $this->toDoRepository->save(new ToDo($toDo));
    }

    public function removeToDo(int $number): void
    {
    }
}
