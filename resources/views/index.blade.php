<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>You can post a comment for this post.</h1>

    <form action="{{url('/')}}" method="post">
    @csrf
        Your Name: <input type="text" name="userName"><br>
        Your comment: <input type="text" name="comment"><br>
        <input type="submit" value="Post">
    </form>
    @if(Session('message'))
        <h2>{{Session('message')}}</h2>
    @endif
</body>
</html>