<?php

namespace Vijaycs85\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class DrupalTemplateInstallerPlugin implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new DrupalTemplateInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}