<?php

namespace Drupal\Core\Layout;

use Drupal\Component\Plugin\DerivativeInspectionInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Component\Plugin\ConfigurableInterface;
use Drupal\Component\Plugin\DependentPluginInterface;
use Drupal\Core\Plugin\ContextAwarePluginInterface;

/**
 * Provides an interface for static Layout plugins.
 */
interface LayoutInterface extends PluginInspectionInterface, DerivativeInspectionInterface, ConfigurableInterface, DependentPluginInterface, ContextAwarePluginInterface {

  /**
   * Build a render array for layout with regions.
   *
   * @param array $regions
   *   An associative array keyed by region name, containing render arrays
   *   representing the content that should be placed in each region.
   *
   * @return array
   *   Render array for the layout with regions.
   */
  public function build(array $regions);

  /**
   * {@inheritdoc}
   *
   * @return \Drupal\Core\Layout\LayoutDefinition
   *   The layout plugin definition for this plugin.
   */
  public function getPluginDefinition();

}
