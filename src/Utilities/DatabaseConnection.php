<?php

namespace Cprac\Utilities;

use mysqli;

class DatabaseConnection {
  /**
   * Mysqli connection
   * @var mysqli|null
   */
  private ?mysqli $mysqli = null;

  private function __construct() {
    $this->mysqli = new mysqli("localhost", "root", "123456", "db");
  }

  public function getInstance() {
    if($this->mysqli) {
      return $this->mysqli;
    } else {
      $this->mysqli = new mysqli("localhost", "root", "123456", "db");
      return $this->mysqli;
    }
  }
}