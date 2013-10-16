<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paul Hendryx (phendryx@malwarebytes.org)
 * Date: 10/14/13
 * Time: 11:52 AM
 */

namespace Malwarebytes\SmartyStreetsBundle\Entity;

use JMS\Serializer\Annotation\Type,
    JMS\Serializer\Annotation\SerializedName,
    JMS\Serializer\Annotation\Groups;

/**
 * http://smartystreets.com/kb/liveaddress-api/field-definitions#components
 */
class StreetAddressComponent
{
    /**
     * @Type("string")
     * @SerializedName("urbanization")
     * @Groups({"all"})
     * @var string
     */
    public $urbanization;

    /**
     * @Type("string")
     * @SerializedName("primary_number")
     * @Groups({"all"})
     * @var string
     */
    public $primaryNumber;

    /**
     * @Type("string")
     * @SerializedName("street_name")
     * @Groups({"all"})
     * @var string
     */
    public $streetName;

    /**
     * @Type("string")
     * @SerializedName("street_predirection")
     * @Groups({"all"})
     * @var string
     */
    public $streetPredirection;

    /**
     * @Type("string")
     * @SerializedName("street_postdirection")
     * @Groups({"all"})
     * @var string
     */
    public $streetPostdirection;

    /**
     * @Type("string")
     * @SerializedName("street_suffix")
     * @Groups({"all"})
     * @var string
     */
    public $streetSuffix;

    /**
     * @Type("string")
     * @SerializedName("secondary_number")
     * @Groups({"all"})
     * @var string
     */
    public $secondaryNumber;

    /**
     * @Type("string")
     * @SerializedName("secondary_designator")
     * @Groups({"all"})
     * @var string
     */
    public $secondaryDesignator;

    /**
     * @Type("string")
     * @SerializedName("extra_secondary_number")
     * @Groups({"all"})
     * @var string
     */
    public $extraSecondaryNumber;

    /**
     * @Type("string")
     * @SerializedName("extra_secondary_designator")
     * @Groups({"all"})
     * @var string
     */
    public $extraSecondaryDesignator;

    /**
     * @Type("string")
     * @SerializedName("pmb_designator")
     * @Groups({"all"})
     * @var string
     */
    public $pmbDesignator;

    /**
     * @Type("string")
     * @SerializedName("pmb_number")
     * @Groups({"all"})
     * @var string
     */
    public $pmbNumber;

    /**
     * @Type("string")
     * @SerializedName("city_name")
     * @Groups({"all"})
     * @var string
     */
    public $cityName;

    /**
     * @Type("string")
     * @SerializedName("default_city_name")
     * @Groups({"all"})
     * @var string
     */
    public $defaultCityName;

    /**
     * @Type("string")
     * @SerializedName("state_abbreviation")
     * @Groups({"all"})
     * @var string
     */
    public $state_abbreviation;

    /**
     * @Type("string")
     * @SerializedName("zipcode")
     * @Groups({"all"})
     * @var string
     */
    public $zipcode;

    /**
     * @Type("string")
     * @SerializedName("plus4_code")
     * @Groups({"all"})
     * @var string
     */
    public $plus4Code;

    /**
     * @Type("string")
     * @SerializedName("delivery_point")
     * @Groups({"all"})
     * @var string
     */
    public $deliveryPoint;

    /**
     * @Type("string")
     * @SerializedName("delivery_point_check_digit")
     * @Groups({"all"})
     * @var string
     */
    public $deliveryPointCheckDigit;

}