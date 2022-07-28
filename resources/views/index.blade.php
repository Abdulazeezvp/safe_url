<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create shorten url</title>
</head>

<body>
    <form method="post" action="{{route('create_short_url')}}">
        {{@csrf_field()}}
        <input type="text" placeholder="Url" name="url"><br>
        <br>
        <br>
        @if ($errors->has('url'))
        <span >{{ $errors->first('url') }}</span>
        <br>
        <br>
        <br>
        @endif
        <input type="submit">
    </form>
    @if(isset($status) && $status==true)
    <h3>Shortened url:</h3><br>
         <!-- {{$shrt_url}} -->
         <input type="text" value="{{$shrt_url}}" id="shrlurl" disabled>
         <button onclick="myFunction()">
         Copy URL
         </button>
    @endif
</body>
<script>
function myFunction() {
    ///copied from w3school.

  var copyText = document.getElementById("shrlurl");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied the url: " + copyText.value);
}
</script>
</html>