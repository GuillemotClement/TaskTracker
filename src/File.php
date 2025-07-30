<?php
declare(strict_types=1);
namespace Clement\TaskTracker;
class File
{
    public static function checkFolderIsCreate(string $path): bool
    {
        return file_exists($path);
    }
//
//    public static function createFolder(string $path): void
//    {
//        if(!$this->checkFolderIsCreate($path)){
//
//        }
//    }
}