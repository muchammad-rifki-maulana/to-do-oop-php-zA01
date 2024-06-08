<?php

require_once __DIR__ . "/../entity/ToDo.php";
require_once __DIR__ . "/../repository/ToDoRepository.php";
require_once __DIR__ . "/../service/ToDoService.php";
require_once __DIR__ . "/../helper/InputHelper.php";
require_once __DIR__ . "/../view/ToDoView.php";

use Repository\ToDoRepositoryImpl;
use Service\ToDoServiceImpl;
use View\ToDoView;

function testViewShowToDo(): void
{
    $toDoView = new ToDoView(new ToDoServiceImpl(new ToDoRepositoryImpl()));

    $toDoView->showToDo();
}

function testViewAddToDo(): void
{
    $toDoView = new ToDoView(new ToDoServiceImpl(new ToDoRepositoryImpl()));

    $toDoView->showToDo();
}

function testViewRemoveToDo(): void
{
    $toDoView = new ToDoView(new ToDoServiceImpl(new ToDoRepositoryImpl()));

    $toDoView->showToDo();
}

testViewAddToDo();
