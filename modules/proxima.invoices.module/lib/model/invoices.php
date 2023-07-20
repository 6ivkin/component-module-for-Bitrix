<?php

namespace Proxima\Invoices\Module\Model;

use Bitrix\Main\ORM\Fields;
use Bitrix\Main\ORM\Data\DataManager;
use Proxima\Invoices\Module\Invoices;

class InvoicesTable extends DataManager
{
    /**
     * @return string
     */
    public static function getTableName(): string
    {
        return 'f_invoices';
    }

    /**
     * @return string
     */
    public static function getObjectClass(): string
    {
        return Invoices::class;
    }

    /**
     * @return array
     */
    public static function getMap(): array
    {
        return array(
            new Fields\IntegerField(
                'ID',
                array(
                    'primary' => true,
                    'autocomplite' => true
                )
            ),
            new Fields\StringField('NOMER', array('required' => true)),
            new Fields\FloatField('SUMMA', array('required' => true)),
            new Fields\DateField('DATE', array('required' => true)),
        );
    }
}