<?php

Yii::import('application.models._base.BasePerson');

class Person extends BasePerson
{
    /**
     * @return Person
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Person|People', $n);
    }

}