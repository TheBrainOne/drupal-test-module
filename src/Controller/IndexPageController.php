<?php

/**
 * @file
 * Contains \Drupal\test\Controller\IndexPageController.
 */

namespace Drupal\test\Controller;

class IndexPageController
{

    public function render()
    {
        return array(
            '#theme' => 'index',
            '#data' => 'Awesome custom module! Yeah!',
        );
    }
}
