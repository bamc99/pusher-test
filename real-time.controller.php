<?php 

class RealTime{

    public function changeStatus($id, $newStatus)
    {
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
        $data['idUsuario'] = $id;
        $data['newStatus'] = $newStatus;
        $pusher->trigger('realtime-channel', 'change-status', $data);
    }

}

?>