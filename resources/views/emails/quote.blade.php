<!DOCTYPE html>
<html>
<head>
    <title>Request A Quote</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f8f9fa; padding: 15px; text-align: center; }
        .content { padding: 20px; }
        .footer { margin-top: 20px; font-size: 0.8em; color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Quote Request</h2>
        </div>

        <div class="content">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>

            <p><strong>Fax:</strong> {{ $data['fax'] }}</p>
            <p><strong>Country:</strong> {{ $data['countrySelect'] }}</p>
            <p><strong>Company:</strong> {{ $data['companyName'] }}</p>

            <p><strong>Freight Type:</strong> {{ $data['FreightSelect'] }}</p>
            <p><strong>Origin Country:</strong> {{ $data['originCountrySelect'] }}</p>
            <p><strong>Origin State:</strong> {{ $data['stateOriginName'] }}</p>

            <p><strong>Departure Type:</strong> {{ $data['departuretypeSelect'] }}</p>
            <p><strong>Destination Country:</strong> {{ $data['destinationCountrySelect'] }}</p>
            <p><strong>Destination State:</strong> {{ $data['stateOriginName'] }}</p>

            <p><strong>Arrival Type:</strong> {{ $data['ArrivalType'] }}</p>
            <p><strong>Required Shipping Date:</strong> {{ $data['shippingDate'] }}</p>

            <p><strong>Container Type:</strong> {{ $data['ContainerType'] }}</p>
            <p><strong>Commodity:</strong> {{ $data['commodity'] }}</p>

            <p><strong>Dimensions 1:</strong> {{ $data['dimensions1'] }}</p>
            <p><strong>Dimensions 2:</strong> {{ $data['dimensions2'] }}</p>
            <p><strong>Dimensions 3:</strong> {{ $data['dimensions3'] }}</p>
            <p><strong>Dimension Type:</strong> {{ $data['DimensionSizeType'] }}</p>

            <p><strong>Cargo Packed:</strong> {{ $data['CargoPacked'] }}</p>
            <p><strong>Packing Number:</strong> {{ $data['packingNumber'] }}</p>
            <p><strong>Total Weight:</strong> {{ $data['totalWeight'] }}</p>
            <p><strong>Incoterms:</strong> {{ $data['incoterms'] }}</p>

            <p><strong>Is your cargo stackable?:</strong> {{ $data['cargoStackable'] }}</p>
            <p><strong>Is Your cargo Hazardous? Material Safety Data Sheet (MSDM) a must to Quote:</strong> {{ $data['cargoHazardous'] }}</p>
            <p><strong>Do you Require cargo Insurance?:</strong> {{ $data['cargoInsurance'] }}</p>

            <p><strong>Cargo Value:</strong> {{ $data['cargoValue'] }}</p>
            <p><strong>Special Note:</strong> {{ $data['message'] }}</p>


        </div>
        <div class="footer">
            <p>This message was sent via the Get free quote on {{ config('app.name') }} at {{ now()->format('Y-m-d H:i:s') }}.</p>
        </div>
    </div>
</body>
</html>
