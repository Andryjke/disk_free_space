<?php

namespace Andryjka\Otus;


class SpaceChecker
{
    /**
     * @return string
     */
    public function checkSpace(): string
    {
        $freeSpace = disk_free_space('/');

        return $this->formatBytes($freeSpace);
    }

    /**
     * @param $bytes
     * @return string
     */
    protected function formatBytes($bytes): string
    {
        $si_prefix = ['B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB'];
        $base = 1024;
        $class = min((int)log($bytes, $base), count($si_prefix) - 1);

        return sprintf('%1.2f', $bytes / ($base ** $class)) . ' ' . $si_prefix[$class];
    }
}