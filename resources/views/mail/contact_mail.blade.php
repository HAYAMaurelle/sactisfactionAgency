<!DOCTYPE html>
<html>
<head>
    <title>SatisfactionAgency.com</title>
</head>
<body>
    <h1>{{ $mailData['name'] }}</h1>
    <p>{{ $mailData['email'] }}</p>
    <p>{{ $mailData['subject'] }}</p>
  
    <p>{{$mailData['message']}}</p>
    
</body>
</html>
