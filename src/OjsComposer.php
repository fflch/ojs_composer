<?php

namespace OjsComposer;

use Composer\Script\Event;
use Composer\Util\Filesystem;

class OjsComposer
{
    public static function postInstall(Event $event)
    {
        $appDir = getcwd();
        $extra = $event->getComposer()->getPackage()->getExtra();
        $installerdir = $extra['installerdir'];
        $filesystem = new Filesystem();
        $filesystem->copy($appDir . "/vendor/pkp/ojs", $appDir . DIRECTORY_SEPARATOR . $installerdir);
    }
}
