<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'us2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '428b335ced7db8fb8061',
    '184a1323519ac57c277f',
    '1479351',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('test-channel', 'test-event', $data);
?>