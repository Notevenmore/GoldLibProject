<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    @if(Request::routeIs('login') || Request::routeIs('register') || Request::routeIs('authorize'))
      <link rel="stylesheet" href="../css/auth-style.css" />
    @endif
      <link rel="stylesheet" href="../css/style.css" />
  </head>