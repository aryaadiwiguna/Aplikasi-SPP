<?php

function redirect(string $path)
{
    header('Location: ' . BASE_URL . $path);
    exit;
}


function login($data)
{
    if (isset($data['password'])) {
        unset($data['password']);
    }

    $_SESSION['user'] = $data;
}

function getLoginAccount()
{
    if (!isset($_SESSION['user'])) {
        return null;
    }

    return $_SESSION['user'];
}

function bulan($bulan_pilihan = null)
{
    $bulan = [
        '1' => 'Januari',
        '2' => 'Februari',
        '3' => 'Maret',
        '4' => 'April',
        '5' => 'Mei',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'Agustus',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    ];

    if ($bulan_pilihan == null) {
        return $bulan;
    } 

    return $bulan[$bulan_pilihan];
}

function bulanAngka()
{
    $bulan = [
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    ];

    return $bulan;
}
