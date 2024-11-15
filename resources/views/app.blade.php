<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/resources/css/app.css">
  @vite("./resources/css/app.css")
  <title>ADO | @yield("titulo")</title>
</head>
<body class="bg-gray-200">
  @yield("app_content")
</body>
</html>