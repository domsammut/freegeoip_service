FreeGeoIP Service
=================

Returns a users geo location information based off the awesome freegeoip.net API for Symphony CMS

Thanks go to the following people:

 - Alexandre Fiori, creator of freegeoip.net
 - Joseph Denne, who created GeoLocation Service

A very simple extension that fetches IP information from freegeoip.net.

An example of the data set returned in your page XML:

    <user_geo_info>
        <response>
             <Ip>8.8.8.4</Ip>
             <CountryCode>US</CountryCode>
             <CountryName>United States</CountryName>
             <RegionCode>CA</RegionCode>
             <RegionName>California</RegionName>
             <City>Mountain View</City>
             <ZipCode>94043</ZipCode>
             <Latitude>37.4192</Latitude>
             <Longitude>-122.0574</Longitude>
             <MetroCode>807</MetroCode>
             <AreaCode>650</AreaCode>
        </response>
    </user_geo_info>

There is a request limit of 10,000 per hour.

Alternatively you can download the source code for freegeoip.net off GitHub and run your own server and simply update the `$location` variable in the class.freegeoip_service.php file.

Any bugs, please report on GitHub. Any feature requests just let me know. 

More info about me at https://www.domsammut.com/
