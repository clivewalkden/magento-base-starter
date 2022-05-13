<?php
declare(strict_types=1);

namespace CliveWalkden;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\String\Slugger\AsciiSlugger;

class Preparation
{
    /**
     * Create required directories
     *
     * @param array $dirs
     * @return void
     */
    public static function createDirs(array $dirs): void
    {
        $fs = new Filesystem();
        $cwd = getcwd();
        foreach ($dirs as $dir) {
            if (!$fs->exists($cwd . '/' . $dir)) {
                $fs->mkdir($cwd . '/' . $dir);
            }
        }
    }

    /**
     * Copy the template files into the correct location
     *
     * @param array $files
     * @return void
     */
    public static function copyFiles(array $files): void
    {
        $fs = new Filesystem();
        $cwd = getcwd();

        foreach ($files as $file) {
            if (!$fs->exists($cwd . '/' . $file)) {
                $fs->copy($cwd . '/Scripts/Templates/' . $file, $cwd . '/' . $file);
            }
        }
    }

    /**
     * Generate the domain to use for this project
     *
     * @return string
     */
    public static function getDomain(): string
    {
        $cwd = getcwd();
        $dir = basename($cwd);

        $slugger = new AsciiSlugger();
        return $slugger->slug($dir) . '.localhost';
    }
}