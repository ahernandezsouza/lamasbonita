<?php

declare(strict_types=1);

namespace Drush\Drupal;

use Drupal\Core\DrupalKernel as DrupalDrupalKernel;

/**
 * Overridden version of DrupalKernel adapted to the needs of Drush.
 */
class DrupalKernel extends DrupalDrupalKernel
{
    use DrupalKernelTrait;
}
