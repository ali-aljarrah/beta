<!DOCTYPE html>
<html>
<head>
    <title>Career Application Request</title>
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
            <h2>Career Application Request</h2>
        </div>

        <div class="content">
            <p><strong>Name:</strong> {{ $request['name'] }}</p>
            <p><strong>Email:</strong> {{ $request['email'] }}</p>
            <p><strong>Phone:</strong> {{ $request['phone'] }}</p>
            <p><strong>Reference:</strong> {{ $request['ReferenceNo'] }}</p>


        </div>
        <div class="footer">
            <p>This message was sent via the Career Application on {{ config('app.name') }} at {{ now()->format('Y-m-d H:i:s') }}.</p>
        </div>
    </div>
</body>
</html>
