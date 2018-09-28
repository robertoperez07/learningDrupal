<?php 
namespace Drupal\assignment\Controller;
use Drupal\Core\Controller\ControllerBase;
class AssignmentController extends ControllerBase {
  public function myPage() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Welcome to my website!'),
    );
  }
}