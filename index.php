<?php
  require __DIR__ . '/vendor/autoload.php';
  require_once('real-time.controller.php');

  if (isset($_GET['type'])) {
    if ($_GET['type']=='status') {
      if (isset($_GET['id']) && isset($_GET['newStatus'])) {
        $realtime = new RealTime();
        $realtime->changeStatus($_GET['id'], $_GET['newStatus']);

        return 'succes';
      }
    }
  }


?>