<?php

Yii::import('application.models._base.BaseInstitution');

class Institution extends BaseInstitution
{
    /**
     * @return Institution
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Institution|Institutions', $n);
    }

}