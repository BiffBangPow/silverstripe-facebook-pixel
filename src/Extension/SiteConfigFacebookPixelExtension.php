<?php

namespace BiffBangPow\FacebookPixel\Extension;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class SiteConfigFacebookPixelExtension extends DataExtension
{
    /**
     * @var array
     */
    private static $db = [
        'FacebookPixelID' => 'Varchar(200)',
    ];

    /**
     * @param FieldList $fields
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Facebook', [
            TextField::create('FacebookPixelID', 'Facebook Pixel ID'),
        ]);
    }
}
