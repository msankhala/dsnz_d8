<?php

namespace Drupal\dsnz_d8\Ajax;

use Drupal\Core\Ajax\CommandInterface;

/**
 * Custom ajax command class implementation.
 */
class DSNZ2017Command implements CommandInterface {
  protected $event;

  /**
   * Constructor.
   *
   * @param object $event
   *        Event object.
   */
  public function __construct($event) {
    $this->event = $event;
  }

  /**
   * Implements Drupal\Core\Ajax\CommandInterface:render()
   *
   * @return array
   *         Command information.
   */
  public function render() {
    return array(
      'command' => 'dsnz2017Command',
      'date' => $this->event->date,
      'place' => $this->event->place,
      'audience' => $this->event->audience,
    );
  }

}
