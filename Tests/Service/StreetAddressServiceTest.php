<?php
/**
 * Created by JetBrains PhpStorm.
 * User: phendryx
 * Date: 10/14/13
 * Time: 10:45 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Malwarebytes\SmartyStreetsBundle\Service\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressRequest;
use Malwarebytes\SmartyStreetsBundle\Service\VerifyAddressService;

class StreetAddressServiceTest extends WebTestCase
{
    public function testStreetAddressServiceVerify200WithResults()
    {
        $returnJson = '[{"input_index":0,"candidate_index":0,"delivery_line_1":"10 Almaden Blvd","last_line":"San Jose CA 95113-2226","delivery_point_barcode":"951132226991","components":{"primary_number":"10","street_name":"Almaden","street_suffix":"Blvd","city_name":"San Jose","state_abbreviation":"CA","zipcode":"95113","plus4_code":"2226","delivery_point":"99","delivery_point_check_digit":"1"},"metadata":{"record_type":"H","zip_type":"Standard","county_fips":"06085","county_name":"Santa Clara","carrier_route":"C061","congressional_district":"19","building_default_indicator":"Y","rdi":"Commercial","elot_sequence":"0154","elot_sort":"A","latitude":37.33344,"longitude":-121.89386,"precision":"Zip9"},"analysis":{"dpv_match_code":"D","dpv_footnotes":"AAN1","dpv_cmra":"N","dpv_vacant":"N","active":"Y","footnotes":"H#L#"}}]';

        $client = static::createClient();

        $address = new StreetAddressRequest();
        $address->setStreet("10 Almaden");
        $address->setCity("San Jose");
        $address->setState("CA");

        /** @var $verifyAddressService VerifyAddressService */
        $verifyAddressService = $client->getContainer()->get("mwalwarebytes_smarty_streets.street_address_service");
        $verifyAddressService->verify($address);
    }
}