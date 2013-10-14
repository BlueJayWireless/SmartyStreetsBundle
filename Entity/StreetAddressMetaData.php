<?php
/**
 * Created by JetBrains PhpStorm.
 * User: phendryx
 * Date: 10/14/13
 * Time: 11:52 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Malwarebytes\SmartyStreetsBundle\Entity;

use JMS\Serializer\Annotation\Type,
    JMS\Serializer\Annotation\SerializedName,
    JMS\Serializer\Annotation\Groups;

/**
 * http://smartystreets.com/kb/liveaddress-api/field-definitions#metadata
 */
class StreetAddressMetaData
{
    /**
     * @Type("string")
     * @SerializedName("record_type")
     * @Groups({"all"})
     * @var string
     */
    public $recordType;

    /**
     * @Type("string")
     * @SerializedName("zip_type")
     * @Groups({"all"})
     * @var string
     */
    public $zipType;

    /**
     * @Type("string")
     * @SerializedName("county_fips")
     * @Groups({"all"})
     * @var string
     */
    public $countyFips;

    /**
     * @Type("string")
     * @SerializedName("county_name")
     * @Groups({"all"})
     * @var string
     */
    public $countyName;

    /**
     * @Type("string")
     * @SerializedName("carrier_route")
     * @Groups({"all"})
     * @var string
     */
    public $carrierRoute;

    /**
     * @Type("string")
     * @SerializedName("congressional_district")
     * @Groups({"all"})
     * @var string
     */
    public $congressionalDistrict;

    /**
     * @Type("string")
     * @SerializedName("building_default_indicator")
     * @Groups({"all"})
     * @var string
     */
    public $buildingDefaultIndicator;

    /**
     * @Type("string")
     * @SerializedName("rdi")
     * @Groups({"all"})
     * @var string
     */
    public $rdi;

    /**
     * @Type("string")
     * @SerializedName("elot_sequence")
     * @Groups({"all"})
     * @var string
     */
    public $elotSequence;

    /**
     * @Type("string")
     * @SerializedName("elot_sort")
     * @Groups({"all"})
     * @var string
     */
    public $elotSort;

    /**
     * @Type("float")
     * @SerializedName("latitude")
     * @Groups({"all"})
     * @var float
     */
    public $latitude;

    /**
     * @Type("float")
     * @SerializedName("longitude")
     * @Groups({"all"})
     * @var float
     */
    public $longitude;

    /**
     * @Type("string")
     * @SerializedName("precision")
     * @Groups({"all"})
     * @var string
     */
    public $precision;

}