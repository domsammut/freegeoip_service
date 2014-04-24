<?php

require_once(TOOLKIT . '/class.json.php');


Class freegeoip_service_request {

    public static function ip_lookup($ip) {

        /**
         * Originally built with requests made over HTTPS,
         * reverted to non https for public production in case
         * people have performance issues.
         */

        $location = 'http://freegeoip.net/json/';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $location . $ip);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        $request = curl_getinfo($ch); //Cross our fingers that we get a 200!

        if ($request['http_code'] != 200) {
            return null;
            //YOU SHALL NOT PASS!
        }

        /**
         * Convert the JSON into XML, and remove the top level node.
         */
        $data = JSON::convertToXML($data, false);
        $data = preg_replace('/<\\/?data(\\s+.*?>|>)/', '', $data);

        return $data;

    }
}