<?php

class FilterDir
{
    private ProjectDir $_projectDir;

    public function __construct(ProjectDir $projectDir)
    {
        $this->_projectDir = $projectDir;
    }

    public function getArrayByFilterTag(string $filter)
    {
        $newFile = [];
        foreach($this->_projectDir->getArrFilePath() as $key => $filePathName)
        {
            if (strpos($filePathName, $filter) === false) {
                continue;
            }
            $newFile[$this->getFolderName($filePathName)] = $filePathName;
        }
        return $newFile;
    }

    private function getFolderName(string $filePathName)
    {
        $firstValue = substr($filePathName, strpos($filePathName, "/") + 1);
        $finalValue= str_replace(['/', $this->_projectDir->getFilter()], ['-', ''], $firstValue);

        return rtrim($finalValue,'-');
    }
}