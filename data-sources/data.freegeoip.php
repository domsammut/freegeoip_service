<?php

require_once(TOOLKIT . '/class.datasource.php');
require_once(EXTENSIONS . '/freegeoip_service/lib/class.freegeoip_service.php');

Class datasourcefreegeoip extends Datasource {

    public $dsParamROOTELEMENT = 'user_geo_info';

    public function about(){
        return array(
            'name' => 'FreeGeoIp Service',
            'version' => '0.1',
            'release-date' => '2014-04-25',
            'author' => array(
                'name' => 'Dom Sammut',
                'website' => 'https://www.domsammut.com/'
            )
        );
    }

    public function execute(){

        $result = new XMLElement($this->dsParamROOTELEMENT);

        $data = freegeoip_service_request::ip_lookup($_SERVER['REMOTE_ADDR']);

        if (is_null($data)) {
            $result->appendChild(new XMLElement('error', 'Location cannot be found.'));
            $result->appendChild(new XMLElement('ip_information', $_SERVER['REMOTE_ADDR']));
        } else {
            $result->appendChild(new XMLElement('response', $data));
        }

        return $result;


    }

}

