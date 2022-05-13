<?php

namespace CliveWalkden\Composer;

use CliveWalkden\Preparation;
use Composer\Script\Event;
use Composer\Semver\Comparator;

class Handler
{
    public static function prepare(Event $event)
    {
        $io = $event->getIO();
        
        // Create the Magento directory
        $dirs = ['magento'];
        Preparation::createDirs($dirs);

        // Copy files to the correct location
        $files = [
            'docker-compose.yml' => 'docker-compose.yml',
            '.docker/' => '.docker'
        ];
        Preparation::copyFiles($files);

        // Get domain from directory
        $domain = Preparation::getDomain();
        
        $io->error("<error>Domain: {$domain}</error>");
        exit(1);
    }

    public static function checkComposerVersion(Event $event)
    {
        $composer = $event->getComposer();
        $io = $event->getIO();

        $version = $composer::VERSION;

        if (preg_match('/^[0-9a-f]{40}$/i', $version)) {
            $version = $composer::BRANCH_ALIAS_VERSION;
        }

        if (Comparator::lessThan($version, '2.2.0')) {
            $io->writeError('<error>This project requires Composer version 2.2.0 or higher</error>');
            exit(1);
        }
    }
}