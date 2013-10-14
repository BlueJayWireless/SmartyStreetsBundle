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
 * http://smartystreets.com/kb/liveaddress-api/field-definitions#analysis
 */
class StreetAddressAnalysis
{
    /**
     * @Type("string")
     * @SerializedName("dpv_match_code")
     * @Groups({"all"})
     * @var string
     */
    public $dpvMatchCode;

    /**
     * @Type("string")
     * @SerializedName("dpv_footnotes")
     * @Groups({"all"})
     * @var string
     */
    public $dpvFootnotes;

    /**
     * @Type("string")
     * @SerializedName("dpv_cmra")
     * @Groups({"all"})
     * @var string
     */
    public $dpvCmra;
    /**
     * @Type("string")
     * @SerializedName("dpv_vacant")
     * @Groups({"all"})
     * @var string
     */
    public $dvpVacant;

    /**
     * @Type("string")
     * @SerializedName("active")
     * @Groups({"all"})
     * @var string
     */
    public $active;

    /**
     * @Type("string")
     * @SerializedName("ews_match")
     * @Groups({"all"})
     * @var string
     */
    public $ewsMatch;

    /**
     * @Type("string")
     * @SerializedName("footnotes")
     * @Groups({"all"})
     * @var string
     */
    public $footnotes;

    /**
     * @Type("string")
     * @SerializedName("lacslink_code")
     * @Groups({"all"})
     * @var string
     */
    public $lacslinkCode;

    /**
     * @Type("string")
     * @SerializedName("lacslink_indicator")
     * @Groups({"all"})
     * @var string
     */
    public $lacslinkIndicator;

    /**
     * @Type("string")
     * @SerializedName("suitelink_match")
     * @Groups({"all"})
     * @var string
     */
    public $suitelinkMatch;

}