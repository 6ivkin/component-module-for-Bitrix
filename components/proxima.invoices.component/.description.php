<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = [
    'NAME'        => 'Счета',
    'DESCRIPTION' => 'Создание таблицы для хранения оплаченных счетов.',
    'ICON'        => '/images/icon.gif',
    'PATH'        => [
        'ID'    => 'Proxima',
        'NAME'  => 'Проксима',
        'CHILD' => [
            'ID'   => 'invoices',
            'NAME' => 'Работа со счетами',
        ],
    ],
    'COMPLEX' => 'Y',
];