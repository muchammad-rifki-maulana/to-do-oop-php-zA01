<?php

require_once __DIR__ . "/entity/ToDo.php";
require_once __DIR__ . "/helper/InputHelper.php";
require_once __DIR__ . "/repository/ToDoRepository.php";
require_once __DIR__ . "/service/ToDoService.php";
require_once __DIR__ . "/view/ToDoView.php";

use Repository\ToDoRepositoryImpl;
use Service\ToDoServiceImpl;
use View\ToDoView;

$toDo = new ToDoView(new ToDoServiceImpl(new ToDoRepositoryImpl()));

$toDo->showToDo();
