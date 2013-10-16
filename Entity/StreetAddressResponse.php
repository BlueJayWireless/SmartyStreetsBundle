<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paul Hendryx (phendryx@malwarebytes.org)
 * Date: 10/14/13
 * Time: 11:51 AM
 */

namespace Malwarebytes\SmartyStreetsBundle\Entity;

use JMS\Serializer\Annotation\Type,
    JMS\Serializer\Annotation\SerializedName,
    JMS\Serializer\Annotation\Groups;

/**
 * http://smartystreets.com/kb/liveaddress-api/field-definitions#root
 */
class StreetAddressResponse
{
    /**
     * @Type("string")
     * @SerializedName("input_id")
     * @Groups({"all"})
     * @var string
     */
    public $inputId;

    /**
     * @Type("integer")
     * @SerializedName("input_index")
     * @Groups({"all"})
     * @var integer
     */
    public $inputIndex;

    /**
     * @Type("integer")
     * @SerializedName("candidate_index")
     * @Groups({"all"})
     * @var integer
     */
    public $candidateIndex;

    /**
     * @Type("string")
     * @SerializedName("addressee")
     * @Groups({"all"})
     * @var string
     */
    public $addressee;

    /**
     * @Type("string")
     * @SerializedName("delivery_line_1")
     * @Groups({"all"})
     * @var string
     */
    public $deliveryLine1;

    /**
     * @Type("string")
     * @SerializedName("delivery_line_2")
     * @Groups({"all"})
     * @var string
     */
    public $deliveryLine2;

    /**
     * @Type("string")
     * @SerializedName("last_line")
     * @Groups({"all"})
     * @var string
     */
    public $lastLine;

    /**
     * @Type("string")
     * @SerializedName("delivery_point_barcode")
     * @Groups({"all"})
     * @var string
     */
    public $deliveryPointBarcode;

    /**
     * @Type("Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressComponent")
     * @SerializedName("components")
     * @Groups({"all"})
     * @var \Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressComponent
     */
    public $components;

    /**
     * @Type("Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressMetaData")
     * @SerializedName("metadata")
     * @Groups({"all"})
     * @var \Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressMetaData
     */
    public $metadata;

    /**
     * @Type("Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressAnalysis")
     * @SerializedName("metadata")
     * @Groups({"all"})
     * @var \Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressMAnalysis
     */
    public $analysis;


}