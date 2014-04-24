FreeGeoIP Service
=================

Returns a users geo location information based off the awesome [freegeoip.net](http://www.freegeoip.net) API for Symphony CMS

Thanks go to the following people:

 - Alexandre Fiori, creator of [freegeoip.net](https://github.com/fiorix/freegeoip)
 - Joseph Denne, who created [GeoLocation Service](https://github.com/josephdenne/geolocation_service)

## Example Output

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

### Usage

There is a request limit of 10,000 per hour.

Alternatively you can download the source code for freegeoip.net off GitHub and run your own server and simply update the `$location` variable in the class.freegeoip_service.php file.

## Installation

A stock-standard install process. Full instructions on [how install a Symphony extension](http://www.getsymphony.com/learn/tasks/view/install-an-extension/) can be found on their site.

## Adding it to your site
1. Navigate to Pages and edit the page you wish to have FreeGeoIP information
2. Add the `FreeGeoIP Service` Data Source
3. Finished! You'll now see the nodeset in the Page XML.

## House keeping

Any bugs, please [report](https://github.com/domsammut/freegeoip_service/issues) on GitHub. Any feature requests just let me know. 

More info about me at https://www.domsammut.com/
