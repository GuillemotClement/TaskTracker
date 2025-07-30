<?php
declare(strict_types=1);

namespace Clement\TaskTracker;
class CLITask
{
    public function listCmd(): void
    {
        echo "exit: Permet de sortir du programme" . PHP_EOL;
        echo "list: Affiche la listes des tasks" . PHP_EOL;
        echo "add task_name: Création d'une nouvelle tâche." . PHP_EOL;
    }
}