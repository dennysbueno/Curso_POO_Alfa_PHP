<?php

class ProjectDir
{
    private array $arrFilesPath;
    private string $filter;

    public function __construct(string $dir, string $filter)
    {
      $this->filter = $filter; 
      $this->arrFilesPath = $this->scanAndFilterDir($dir, $this->filter);
    }

    public function scanRecursiveDir(string $dir) : array {
      $result = [];
      foreach(scandir($dir) as $filename) {
        if ($filename[0] === '.') continue;

        $filePath = $dir . '/' . $filename;
        if (is_dir($filePath)) {
          foreach ($this->scanRecursiveDir($filePath) as $childFilename) {
            $result[] = $filename . '/' . $childFilename;
          }
        } else {
          $result[] = $filename;
        }
      }
      return $result;
    }

    public function getArrFilePath() : array
    {
      return $this->arrFilesPath;
    }

    private function scanAndFilterDir(string $dir, string $filter)
    {
      $arrDirs = $this->scanRecursiveDir($dir);
      foreach($arrDirs as $key => $filePathName)
      {
        if (strpos($filePathName, $filter) === false) {
          unset($arrDirs[$key]);
        }
      }
     return $arrDirs;
    }

    public function getFilter() : string
    {
      return $this->filter;
    }
}