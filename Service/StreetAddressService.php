<?php
/**
 * Created by JetBrains PhpStorm.
 * User: phendryx
 * Date: 10/14/13
 * Time: 10:39 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Malwarebytes\SmartyStreetsBundle\Service;

use Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressRequest;
use JMS\Serializer\SerializerBuilder;

class StreetAddressService
{
    /** @var string */
    private $authId;

    /** @var string */
    private $authToken;

    /**
     * @param string $authId
     */
    public function setAuthId($authId)
    {
        $this->authId = $authId;
    }

    /**
     * @param string $authToken
     */
    public function setAuthToken($authToken)
    {
        $this->authToken = $authToken;
    }

    public function verify(StreetAddressRequest $address)
    {
        $serializer = SerializerBuilder::create()->build();
        $jsonInput = $serializer->serialize(array($address), 'json');

        // Your authentication ID/token (obtained in your SmartyStreets account)
        $authId = urlencode($this->authId);
        $authToken = urlencode($this->authToken);

        $url = "https://api.smartystreets.com/street-address/?auth-id={$authId}&auth-token={$authToken}";
        var_dump($url);

        // Initialize cURL
        $ch = curl_init();

        // Configure the cURL command
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonInput);

        $json_output = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        switch ($http_status)
        {
            case 200:
                continue;
                break;
            case 400:
                throw new Exception("SmartyStreets Bad input. Required fields missing from input or are malformed.");
                break;
            case 401:
                throw new Exception("SmartyStreets Unauthorized. Authentication failure; invalid credentials.");
                break;
            case 402:
                throw new Exception("SmartyStreets Payment required. No active subscription found.");
                break;
            case 500:
                throw new Exception("SmartyStreets Internal server error. General service failure; retry request.");
                break;
        }


        // Show results
//        echo "<pre>";
//        print_r($json_output);
//        echo "</pre>";

        $object = $serializer->deserialize($json_output, 'ArrayCollection<Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressResponse>', 'json');
        print_r($object);
    }
}
