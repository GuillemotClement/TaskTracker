# TaskTracker
Project from Roadmap.sh

Task tracker est un projet utilisé pour suivre et gérer vos tâches. 

Dans cette tâche, vous créerez une interface de ligne de commande (CLI) simple pour suivre ce que vous devez faire, ce que vous avez fait et ce sur quoi vous travaillez actuellement. 

Ce projet vous aidera à mettre en pratique vos compétences en programmation, notamment en travaillant avec le système de fichiers, en gérant les entrées utilisateur et en créant une application CLI simple.

## Requirements
L'application doit s'exécuter à partir de la ligne de commande, accepter les actions et les entrées de l'utilisateur comme arguments et stocker les tâches dans un fichier JSON. 

L'utilisateur doit pouvoir :
- Ajouter, mettre à jour et supprimer des tâches
- Marquer une tâche comme étant en cours ou terminée
- Lister toutes les tâches
- Énumérez toutes les tâches effectuées
- Énumérez toutes les tâches qui ne sont pas effectuées
- Énumérez toutes les tâches en cours

Voici quelques contraintes pour guider la mise en œuvre :
- Vous pouvez utiliser n'importe quel langage de programmation pour construire ce projet.
- Utilisez des arguments positionnels en ligne de commande pour accepter les entrées utilisateur.
- Utilisez un fichier JSON pour stocker les tâches dans le répertoire actuel.
- Le fichier JSON doit être créé s'il n'existe pas.
- Utilisez le module de système de fichiers natif de votre langage de programmation pour interagir avec le fichier JSON.
- N'utilisez aucune bibliothèque ou framework externe pour construire ce projet.
- Assurez-vous de gérer les erreurs et les cas extrêmes avec élégance.

## Exemple 

```shell
# Adding a new task
task-cli add "Buy groceries"
# Output: Task added successfully (ID: 1)

# Updating and deleting tasks
task-cli update 1 "Buy groceries and cook dinner"
task-cli delete 1

# Marking a task as in progress or done
task-cli mark-in-progress 1
task-cli mark-done 1

# Listing all tasks
task-cli list

# Listing tasks by status
task-cli list done
task-cli list todo
task-cli list in-progress
```

## Prop de la tache
Chaque tâche doit avoir les propriétés suivantes :
- `id`: Un identifiant unique pour la tâche
- `description`: Une brève description de la tâche
- `status`: L'état de la tâche (`todo`, `in-progress`, `done`)
- `createdAt`: La date et l'heure auxquelles la tâche a été créée
- `updatedAt` : La date et l'heure auxquelles la tâche a été mise à jour pour la dernière fois
Assurez-vous d'ajouter ces propriétés au fichier JSON lors de l'ajout d'une nouvelle tâche et de les mettre à jour lors de la mise à jour d'une tâche.

## Steps 
Voici quelques étapes pour vous aider à démarrer avec le projet Task Tracker CLI :
### Configurez votre environnement de développement
- Choisissez un langage de programmation avec lequel vous êtes à l'aise (par exemple, Python, JavaScript, etc).
- Assurez-vous d'avoir un éditeur de code ou un IDE installé (par exemple, VSCode, PyCharm).

### Initialisation du projet
- Créez un nouveau répertoire de projet pour votre CLI Task Tracker.
- Initialisez un système de contrôle de version (par exemple, Git) pour gérer votre projet.

### Mise en oeuvre des fonctionnalités 
- Commencez par créer une structure CLI de base pour gérer les entrées utilisateur.
- Implémentez chaque fonctionnalité une par une, en veillant à effectuer des tests approfondis avant de passer à la suivante, par exemple en ajoutant d'abord la fonctionnalité de tâche, en répertoriant la suivante, puis en la mettant à jour, en la marquant comme en cours, etc.

### Tests et débogage
- Testez chaque fonctionnalité individuellement pour vous assurer qu’elle fonctionne comme prévu. Regardez le fichier JSON pour vérifier que les tâches sont stockées correctement.
- Déboguez tous les problèmes qui surviennent pendant le développement.

### Finalisation du projet
- Assurez-vous que toutes les fonctionnalités sont implémentées et testées.
- Nettoyez votre code et ajoutez des commentaires si nécessaire.
- Écrivez un bon fichier readme expliquant comment utiliser votre CLI Task Tracker.

À la fin de ce projet, vous aurez développé un outil pratique qui peut vous aider, vous ou d’autres, à gérer efficacement les tâches. 

Ce projet pose des bases solides pour des projets de programmation plus avancés et des applications concrètes.