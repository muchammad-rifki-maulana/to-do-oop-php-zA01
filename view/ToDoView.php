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
        echo "\n- add -\n";
        $toDo = InputHelper::input("to do (press 'x' to cancel)");
        echo "\n";

        if (strtolower($toDo) === "x") {
            echo "- cancel add -\n\n";
        } else {
            $this->toDoService->addToDo($toDo);
        }
    }

    public function removeToDo(): void
    {
        echo "\n- remove -\n";
        $choice = InputHelper::input("number (press 'x' to cancel)");
        echo "\n";

        if (strtolower($choice) === "x") {
            echo "- cancel remove -\n\n";
        } else if ((int)$choice || $choice === "0") {
            $this->toDoService->removeToDo($choice);
        } else {
            echo "- option not understood -\n\n";
        }
    }
}
