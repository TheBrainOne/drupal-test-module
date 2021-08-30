<?php

/**
 * @file
 * Contains \Drupal\testmodule\Controller\IndexPageController.
 */

namespace Drupal\testmodule\Controller;

class IndexPageController
{

    public function content()
    {
        $element = array(
        '#markup' => 'Hello world!',
        );
        return $element;
    }
}
