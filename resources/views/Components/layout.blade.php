<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>

<body>
  <nav>
    <x-nav-link href="/">Home</x-nav-link>
    <x-nav-link href="/jobs">Jobs</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>
  </nav>
  <h1>{{$heading}}</h1>
  {{$slot}}
</body>

</html>