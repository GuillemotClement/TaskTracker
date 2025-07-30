#! /user/bin/env php
<?php
declare(strict_types=1);


use Clement\TaskTracker\CLITask;

require __DIR__ . '/../vendor/autoload.php';

$cli = new CLITask();

$input = readline("Bonjour dans l'application TaskTracker, votre outil CLI de suivis de tâche.\n Quelle est votre demande ?\n" . PHP_EOL);



$arrInput = explode(" ", $input);

$command = $cli->extractCommande($input);
$args = $cli->extractArgs($input);


while(true){
    switch($command){
        case 'help':
            $cli->listCmd();
            break;
        case "add":
            $result = $cli->createTask($args);
            echo $result;
            break;
        case "update":
            echo "Update d'une task";
            break;
        case "delete":
            echo "Delete une task";
            break;
        case "mark-in-progress":
            echo "Mark in progress task";
            break;
        case "mark-done":
            echo "mark done task";
            break;
        case "list":
            echo $cli->listTasks();
            break;
        case "exit":
            echo "Bye bye" . PHP_EOL;
            exit(0);
        default:
            echo "Commande non disponible" . PHP_EOL;
    }
    $input = readline("Saisir votre commande :");
    $command = $cli->extractCommande($input);
    $args = $cli->extractArgs($input);
}







//# Adding a new task
//task-cli add "Buy groceries"
//# Output: Task added successfully (ID: 1)
//
//# Updating and deleting tasks
//task-cli update 1 "Buy groceries and cook dinner"
//task-cli delete 1
//
//# Marking a task as in progress or done
//task-cli mark-in-progress 1
//task-cli mark-done 1
//
//# Listing all tasks
//task-cli list
//
//# Listing tasks by status
//    task-cli list done
//    task-cli list todo
//    task-cli list in-progress