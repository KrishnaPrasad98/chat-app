<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="app">
        <header>
            <h1>Chat-app</h1>
            <input type="text" name="username" id="username" placeholder="Enter your name"> <br><br>
        </header>

        <div id="messages"> 
            @foreach ($dat as $item)
                {{$item->username}}
                {{$item->message}}
            @endforeach
        </div>

        <form id="messages_form">
            <input type="text" name="message" id="messages_input" placeholder="Message..."> 
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>