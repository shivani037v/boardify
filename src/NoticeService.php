<?php

namespace Drupal\boardify;

use Drupal\node\Entity\Node;

class NoticeService {

  public function getNotices() {
    $query = \Drupal::entityQuery('node')
      ->condition('type', 'notice')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->accessCheck(TRUE) // Ensure access check is explicitly set
      ->execute();

    $nids = array_values($query);
    $notices = Node::loadMultiple($nids);

    return $notices;
  }
}
