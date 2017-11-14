<?php

namespace Drupal\dsnz_d8\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\dsnz_d8\Ajax\DSNZ2017Command;

/**
 * Dsnzd8Controller Controler class.
 */
class Dsnzd8Controller extends ControllerBase {

  /**
   * Event page controller.
   *
   * @return array
   *         Event page.
   */
  public function eventPage() {
    $page[] = [
      '#theme' => 'event_page',

    ];

    // Attach JavaScript library.
    $page['#attached']['library'][] = 'dsnz_d8/dsnz_d8.commands';
    return $page;
  }

  /**
   * Ajax callback to load event detail.
   *
   * @return object
   *         ajax response object.
   */
  public function loadEventDetail() {
    $event = new \stdClass();
    $event->date = '<strong>Date: </strong><span>16th - 17th Nov 2017</span>';
    $event->place = '<strong>Place: </strong><span>Auckland, NZ<span>';
    $event->audience = '<strong>Audience: </strong><span>amazing</span>';

    // Create AJAX Response object.
    $response = new AjaxResponse();
    // Call the readMessage javascript function.
    $response->addCommand(new DSNZ2017Command($event));
    // Return ajax response.
    return $response;
  }

}
