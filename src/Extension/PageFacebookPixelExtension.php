<?php

namespace BiffBangPow\FacebookPixel\Extension;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\DataExtension;

class PageFacebookPixelExtension extends DataExtension
{
    const EVENTS = [
        'CompleteRegistration' => 'CompleteRegistration',
        'Contact'              => 'Contact',
        'FindLocation'         => 'FindLocation',
        'Lead'                 => 'Lead',
        'Schedule'             => 'Schedule',
        'Search'               => 'Search',
        'SubmitApplication'    => 'SubmitApplication',
        'ViewContent'          => 'ViewContent',
    ];

    /**
     * @var array
     */
    private static $db = [
        'FacebookPixelEvent' => 'Varchar(200)',
    ];

    /**
     * @param FieldList $fields
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Facebook', [
            DropdownField::create('FacebookPixelEvent', 'Facebook Pixel Event', self::EVENTS)->setEmptyString('None'),
        ]);
    }
}
