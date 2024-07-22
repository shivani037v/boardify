<?php

namespace Drupal\boardify\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\boardify\NoticeService;

class NoticeController extends ControllerBase {

  protected $noticeService;

  public function __construct(NoticeService $notice_service) {
    $this->noticeService = $notice_service;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('boardify.notice_service')
    );
  }

  public function showNotices() {
    $notices = $this->noticeService->getNotices();
    return [
      '#theme' => 'boardify_notices',
      '#notices' => $notices,
    ];
  }
}

