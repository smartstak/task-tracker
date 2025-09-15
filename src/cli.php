#! /usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

use Smartstak\TaskTracker\TaskManager;

$taskManager = new TaskManager();

$command = $argv[1] ?? null;
$arg1 = $argv[2] ?? null;
$arg2 = $argv[3] ?? null;

match ($command) {
    'add' => $taskManager->addTask($arg1),
    'list' => $taskManager->getAllTasks($arg1),
    'delete'=> $taskManager->deleteTask($arg1),
    'update'=> $taskManager->updateTaskById($arg1, $arg2),
    'mark-in-progress' => $taskManager->taskMarkInProgress($arg1),
    'mark-done'=>$taskManager->taskMarkDone($arg1),
    default => print "⚠️ Invalid command\n",
};
