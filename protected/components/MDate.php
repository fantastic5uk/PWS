<?php

/**
 * MDate class file.
 * Manage date and time.
 */
class MDate
{
    const DB_DATE_FORMAT = 'Y-m-d';
    const DB_DATETIME_FORMAT = 'Y-m-d H:i:s';
    const USER_DATE_FORMAT = 'm-d-Y';

    /**
     * Formats a date according to a predefined pattern.
     * @return string
     */
    public static function format($time, $dateWidth = 'medium', $timeWidth = 'medium')
    {
        if (TK::isEmpty($time))
            return null;

        return Yii::app()->dateFormatter->formatDateTime($time, $dateWidth, $timeWidth);
    }

    /**
     * Formats a date for insert in the database.
     * @return string
     */
    public static function formatToDb($time, $format = 'date', $dateWidth = 'medium', $timeWidth = 'medium')
    {
        if (TK::isEmpty($time))
            return null;

        if ($format === 'date') {
            return date(MDate::DB_DATE_FORMAT, CDateTimeParser::parse(trim($time), Yii::app()->locale->getDateFormat($dateWidth)));
        } else if ($format === 'datetime') {
            return date(MDate::DB_DATETIME_FORMAT, CDateTimeParser::parse(trim($time), strtr(Yii::app()->locale->dateTimeFormat, array('{0}' => trim(str_replace('a', '', Yii::app()->locale->getTimeFormat($timeWidth))), '{1}' => Yii::app()->locale->getDateFormat($dateWidth)))));
        } else
            return null;
    }

    public static function getDateFormat()
    {
        return Yii::app()->locale->getDateFormat('medium');
    }

    public static function getDateFormatForDTP()
    {
        return str_replace('yy', 'y', strtolower(Yii::app()->locale->getDateFormat('medium')));
    }

    public static function loadLocale()
    {
        setlocale(LC_TIME, "");
        switch (Yii::app()->language) {
            case 'fr':
                setlocale(LC_TIME, 'french');
                break;
            case 'en':
                setlocale(LC_TIME, 'english');
                break;
            default :
                break;
        }
    }

    public static function getTranslatedDate()
    {
        self::loadLocale();
        return ucwords(strftime('%d %B %Y')); //Le 07 Octobre 2014
    }

    public static function getTranslatedTime()
    {
        self::loadLocale();
        return strftime('%Hh%M'); //09h40
    }
}
