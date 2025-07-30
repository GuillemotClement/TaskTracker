<?php
declare(strict_types=1);

namespace Clement\TaskTracker;

class CLITask
{
    const string FOLDER_TASK = __DIR__ . "/../data";
    const string PATH_FILE = self::FOLDER_TASK . "/tasks.json";

    public function listCmd(): void
    {
        echo "exit: Permet de sortir du programme" . PHP_EOL;
        echo "list: Affiche la listes des tasks" . PHP_EOL;
        echo "add task_name: Création d'une nouvelle tâche." . PHP_EOL;
    }

    public function extractCommande(string $input): string
    {
        $arrInput = explode(" ", $input);
        return array_shift($arrInput);
    }

    public function extractArgs(string $input): string
    {
        $arrInput = explode(" ", $input);
        $cmd = array_shift($arrInput);
        return implode(" ", $arrInput);
    }

    public function createTask(string $input): string
    {
        if(!is_dir(self::FOLDER_TASK)){
            echo "Le dossier n'existe pas, lancement de la création";
            $ok = mkdir(self::FOLDER_TASK);
            if($ok){
                echo "Le dossier est bien créer";
            }else {
                echo "Erreur de la création du dossier";
            }
        }else {
            echo "Dossier déja présent :". self::FOLDER_TASK . "\n";
        }

        if(file_exists(self::PATH_FILE)){
            $taskFromJson = file_get_contents(self::PATH_FILE);
            $arrTask = json_decode($taskFromJson, true);

            $numTask = count($arrTask);
            $id = $numTask + 1;
        } else {
            $id = 1;
        }

        $task = trim($input);

        $arrTask[] = [
            "id" => $id,
            "task" => $task
        ];

        $jsontask = json_encode($arrTask);

        file_put_contents(self::PATH_FILE, $jsontask);

        return "Task add successfully (ID: $id)" . PHP_EOL;
    }

    public function listTasks(): void
    {
        if(file_exists(self::PATH_FILE)){
            $taskFromJson = file_get_contents(self::PATH_FILE);
            $arrTask = json_decode($taskFromJson, true);
            print_r($arrTask);
        }else{
            echo "Pas encore de task";
        }
    }
}