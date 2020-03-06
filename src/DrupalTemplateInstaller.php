<?php

namespace Vijaycs85\Composer;

use Composer\Installer\LibraryInstaller;

class DrupalTemplateInstaller extends LibraryInstaller
{

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'drupal-template' === $packageType;
  }
}
