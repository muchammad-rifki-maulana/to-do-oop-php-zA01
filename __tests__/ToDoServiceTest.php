<?php

require_once __DIR__ . "/../entity/ToDo.php";
require_once __DIR__ . "/../repository/ToDoRepository.php";
require_once __DIR__ . "/../service/ToDoService.php";

use Entity\ToDo;
use Repository\ToDoRepositoryImpl;
use Service\ToDoServiceImpl;

function testShowToDo(): void
{
    $toDoRepository = new ToDoRepositoryImpl();
    $toDoService = new ToDoServiceImpl($toDoRepository);

    $toDoService->showToDo();

    // don't forget if you want to test $toDo make it public
    // $toDoRepository->toDo[] = new ToDo("a");
    // $toDoRepository->toDo[] = new ToDo("b");
    // $toDoRepository->toDo[] = new ToDo("c");

    $toDoService->showToDo();
}

function testAddToDo(): void
{
    $toDoService = new ToDoServiceImpl(new ToDoRepositoryImpl());

    $toDoService->addToDo("a");
    $toDoService->addToDo("b");
    $toDoService->addToDo("c");

    $toDoService->showToDo();
}

testAddToDo();
