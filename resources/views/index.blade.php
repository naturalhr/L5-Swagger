
<!DOCTYPE html>
<html>
<head>
  <title>{{config('l5-swagger.api.title')}}</title>
  <!-- needed for adaptive design -->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  ReDoc doesn't change outer page styles
  -->
  <style>
    body {
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
<redoc spec-url='{!! $urlToDocs !!}'></redoc>
<script src="{{resource_path('js/redoc.min.js')}}"> </script>
</body>
</html>