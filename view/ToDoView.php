<?php

namespace View;

use Helper\InputHelper;
use Service\ToDoService;

class ToDoView
{
    public function __construct(private ToDoService $toDoService)
    {
    }

    public function showToDo(): void
    {
        while (true) {
            echo "to do\n";

            $this->toDoService->showToDo();

            echo "menu\n";
            echo "1. add\n";
            echo "2. remove\n";
            echo "x. exit\n";

            $choose = InputHelper::input("choose");

            switch (strtolower($choose)) {
                case "1":
                    $this->addToDo();
                    break;
                case "2":
                    $this->removeToDo();
                    break;
                case "x":
                    echo "\n- see you -\n";
                    exit;
                default:
                    echo "\n- option not understand -\n\n";
            }
        }
    }

    public function addToDo(): void
    {
    }

    public function removeToDo(): void
    {
    }
}
