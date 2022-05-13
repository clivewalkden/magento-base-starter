<?php
declare(strict_types=1);

namespace CliveWalkden;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
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
     * @param array $dirs
     * @param array $files
     * @return void
     */
    public static function copyTemplates(array $dirs, array $files): void
    {
        $fs = new Filesystem();
        $cwd = getcwd();
        $finder = new Finder();

        // Get domain from directory
        $domain = self::getDomain();

        foreach ($dirs as $dir) {
            if (!$fs->exists($cwd . '/' . $dir)) {
                $fs->mirror($cwd . '/Scripts/Templates/' . $dir, $cwd . '/' . $dir);
                $finder->in($cwd . '/' . $dir)->files()->contains('{{DOMAIN}}');

                foreach ($finder as $file) {
                    $contents = $file->getContents();
                    $contents = str_replace('{{DOMAIN}}', $domain, $contents);
                    file_put_contents($file->getRealPath(), $contents);
                }
            }
        }

        foreach ($files as $file) {
            if (!$fs->exists($cwd . '/' . $file)) {
                $fs->copy($cwd . '/Scripts/Templates/' . $file, $cwd . '/' . $file, true);
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