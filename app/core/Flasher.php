<?php 

class Flasher
{
    public static function set($type, $pesan)
    {
        $_SESSION['flash'] = [
            'type' => $type,
            'pesan' => $pesan
        ];
    }

    public static function Flash()
    {
        if(isset($_SESSION['flash'])) {
           echo '<div class="alert alert-' . $_SESSION['flash']['type'] .'">' . $_SESSION['flash']['pesan'] . '</div>';
           unset($_SESSION['flash']);
        }
    }
}
