<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paul Hendryx (phendryx@malwarebytes.org)
 * Date: 10/14/13
 * Time: 10:45 AM
 */

namespace Malwarebytes\SmartyStreetsBundle\Service\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressRequest;
use Malwarebytes\SmartyStreetsBundle\Entity\StreetAddressResponse;
use Malwarebytes\SmartyStreetsBundle\Service\StreetAddressService;

class StreetAddressServiceTest extends WebTestCase
{
    public function testStreetAddressServicePost()
    {
        $mockOutputJson = '[{"input_index":0,"candidate_index":0,"delivery_line_1":"10 Almaden Blvd","last_line":"San Jose CA 95113-2226","delivery_point_barcode":"951132226991","components":{"primary_number":"10","street_name":"Almaden","street_suffix":"Blvd","city_name":"San Jose","state_abbreviation":"CA","zipcode":"95113","plus4_code":"2226","delivery_point":"99","delivery_point_check_digit":"1"},"metadata":{"record_type":"H","zip_type":"Standard","county_fips":"06085","county_name":"Santa Clara","carrier_route":"C061","congressional_district":"19","building_default_indicator":"Y","rdi":"Commercial","elot_sequence":"0154","elot_sort":"A","latitude":37.33344,"longitude":-121.89386,"precision":"Zip9"},"analysis":{"dpv_match_code":"D","dpv_footnotes":"AAN1","dpv_cmra":"N","dpv_vacant":"N","active":"Y","footnotes":"H#L#"}}]';
        $returnResult = array('output' => $mockOutputJson, 'http_status' => '200');

        $client = static::createClient();

        $address = new StreetAddressRequest();
        $address->setStreet('10 Almaden');
        $address->setCity('San Jose');

        /** @var $mockStreetAddressService StreetAddressService */
        $mockStreetAddressService = $this->getMockBuilder( '\Malwarebytes\SmartyStreetsBundle\Service\StreetAddressService' )
            ->disableOriginalConstructor()
            ->setMethods( array( 'callApi' ) )
            ->getMock();

        $mockStreetAddressService
            ->expects ($this->exactly(1))
            ->method('callApi')
            ->with('https://api.smartystreets.com/street-address/?auth-id=testid&auth-token=testtoken', '[{"street":"10 Almaden","city":"San Jose"}]')
            ->will($this->returnValue($returnResult));

        $mockStreetAddressService->setAuthId('testid');
        $mockStreetAddressService->setAuthToken('testtoken');

        /** @var $result StreetAddressResponse[] */
        $result = $mockStreetAddressService->verify($address);

        $this->assertEquals('10 Almaden Blvd', $result[0]->deliveryLine1);
        $this->assertEquals('San Jose CA 95113-2226', $result[0]->lastLine);
        $this->assertEquals('10', $result[0]->components->primaryNumber);
        $this->assertEquals('Almaden', $result[0]->components->streetName);
        $this->assertEquals('Blvd', $result[0]->components->streetSuffix);
        $this->assertEquals('San Jose', $result[0]->components->cityName);
        $this->assertEquals('95113', $result[0]->components->zipcode);
        $this->assertEquals('2226', $result[0]->components->plus4Code);
        $this->assertEquals('Santa Clara', $result[0]->metadata->countyName);
        $this->assertEquals('Commercial', $result[0]->metadata->rdi);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage SmartyStreets Bad input. Required fields missing from input or are malformed.
     */
    public function testStreetAddressServiceVerify400()
    {
        $returnResult = array('output' => '', 'http_status' => '400');

        $client = static::createClient();

        $address = new StreetAddressRequest();
        $address->setStreet('10 Almaden');
        $address->setCity('San Jose');

        /** @var $mockStreetAddressService StreetAddressService */
        $mockStreetAddressService = $this->getMockBuilder( '\Malwarebytes\SmartyStreetsBundle\Service\StreetAddressService' )
            ->disableOriginalConstructor()
            ->setMethods( array( 'callApi' ) )
            ->getMock();

        $mockStreetAddressService
            ->expects ($this->exactly(1))
            ->method('callApi')
            ->with('https://api.smartystreets.com/street-address/?auth-id=testid&auth-token=testtoken', '[{"street":"10 Almaden","city":"San Jose"}]')
            ->will($this->returnValue($returnResult));

        $mockStreetAddressService->setAuthId('testid');
        $mockStreetAddressService->setAuthToken('testtoken');

        /** @var $result StreetAddressResponse[] */
        $result = $mockStreetAddressService->verify($address);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage SmartyStreets Unauthorized. Authentication failure; invalid credentials.
     */
    public function testStreetAddressServiceVerify401()
    {
        $returnResult = array('output' => '', 'http_status' => '401');

        $client = static::createClient();

        $address = new StreetAddressRequest();
        $address->setStreet('10 Almaden');
        $address->setCity('San Jose');

        /** @var $mockStreetAddressService StreetAddressService */
        $mockStreetAddressService = $this->getMockBuilder( '\Malwarebytes\SmartyStreetsBundle\Service\StreetAddressService' )
            ->disableOriginalConstructor()
            ->setMethods( array( 'callApi' ) )
            ->getMock();

        $mockStreetAddressService
            ->expects ($this->exactly(1))
            ->method('callApi')
            ->with('https://api.smartystreets.com/street-address/?auth-id=testid&auth-token=testtoken', '[{"street":"10 Almaden","city":"San Jose"}]')
            ->will($this->returnValue($returnResult));

        $mockStreetAddressService->setAuthId('testid');
        $mockStreetAddressService->setAuthToken('testtoken');

        /** @var $result StreetAddressResponse[] */
        $result = $mockStreetAddressService->verify($address);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage SmartyStreets Payment required. No active subscription found.
     */
    public function testStreetAddressServiceVerify402()
    {
        $returnResult = array('output' => '', 'http_status' => '402');

        $client = static::createClient();

        $address = new StreetAddressRequest();
        $address->setStreet('10 Almaden');
        $address->setCity('San Jose');

        /** @var $mockStreetAddressService StreetAddressService */
        $mockStreetAddressService = $this->getMockBuilder( '\Malwarebytes\SmartyStreetsBundle\Service\StreetAddressService' )
            ->disableOriginalConstructor()
            ->setMethods( array( 'callApi' ) )
            ->getMock();

        $mockStreetAddressService
            ->expects ($this->exactly(1))
            ->method('callApi')
            ->with('https://api.smartystreets.com/street-address/?auth-id=testid&auth-token=testtoken', '[{"street":"10 Almaden","city":"San Jose"}]')
            ->will($this->returnValue($returnResult));

        $mockStreetAddressService->setAuthId('testid');
        $mockStreetAddressService->setAuthToken('testtoken');

        /** @var $result StreetAddressResponse[] */
        $result = $mockStreetAddressService->verify($address);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage SmartyStreets Internal server error. General service failure; retry request.
     */
    public function testStreetAddressServiceVerify500()
    {
        $returnResult = array('output' => '', 'http_status' => '500');

        $client = static::createClient();

        $address = new StreetAddressRequest();
        $address->setStreet('10 Almaden');
        $address->setCity('San Jose');

        /** @var $mockStreetAddressService StreetAddressService */
        $mockStreetAddressService = $this->getMockBuilder( '\Malwarebytes\SmartyStreetsBundle\Service\StreetAddressService' )
            ->disableOriginalConstructor()
            ->setMethods( array( 'callApi' ) )
            ->getMock();

        $mockStreetAddressService
            ->expects ($this->exactly(1))
            ->method('callApi')
            ->with('https://api.smartystreets.com/street-address/?auth-id=testid&auth-token=testtoken', '[{"street":"10 Almaden","city":"San Jose"}]')
            ->will($this->returnValue($returnResult));

        $mockStreetAddressService->setAuthId('testid');
        $mockStreetAddressService->setAuthToken('testtoken');

        /** @var $result StreetAddressResponse[] */
        $result = $mockStreetAddressService->verify($address);
    }
}