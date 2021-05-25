# AddressFinder
A PHP wrapper for AddressFinder API

## Initialization & Usage
```
$finder = new AddressFinder(KEY, SECRET, FORMAT);
$response = $finder->endpoint(URI, OPTIONS);

// Example: Call Address Autocomplete endpoint
$response = $finder->endpoint('/address/autocomplete', [
    'q' => '35 Hobson Street',
]);
```

[API specifications for New Zealand addresses:](https://addressfinder.nz/api/nz/specs/)

### Address Autocomplete API
#### /address/autocomplete
Interactive search that returns closely matching addresses which are then selected by the user.

### Address Metadata API
#### /address/metadata
Return the full metadata associated with an address selected from the Address Autocomplete API.

### Address Verification API
#### /address/verification
Takes an address (potentially containing spelling mistakes and/or other errors) and attempts to match it against a verified address record in the AddressFinder database.

### Address Reverse Geocode API
#### /address/reverse_geocode
Takes the GPS coordinates (longitude and latitude) and returns the nearest addresses ordered by distance.

### Address Bounding Box API
#### /address/bounding_box
Returns all address contained within the supplied bounding box or polygon.

### Location Autocomplete API
#### /location/autocomplete
Interactive search that returns closely matching streets, suburbs, cities and/or regions which are then selected by the user.

### Location Metadata API
#### /location/metadata
Return the full metadata associated with a location (street, suburb, city or region selected from the Location Autocomplete API.

### Points of Interest Autocomplete API
#### /points_of_interest/autocomplete
Interactive search that returns closely matching points of interest, and their associated addresses.

### Points of Interest Metadata API
#### /points_of_interest/metadata
Return the full metadata associated with a point of interest selected from the Points of Interest Autocomplete API.
