<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .header {
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .header h1 {
            color: maroon;
            margin: 0;
        }

        .header h2 {
            font-style: italic;
            font-size: 16px;
            margin: 3px 0;
        }

        .header p {
            margin: 2px 0;
            font-size: 14px;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="{{asset('Untitled.png')}}" alt="logo">
        <div class="text">
            <h1 style="color: maroon;">Coffee Valley</h1>
            <h2>Taste the love in every cup</h2>
            <p>One Alewife Center 3d Floor</p>
            <p>Cambridge, MA 02140</p>
        </div>
    </div>
    @if(session('error'))
    <div class="inline-block align-baseline">
        <b>Opps!</b> {{session('error')}}
    </div>
    @endif
    <form action="{{route('actionlogin')}}" method="POST">
         @csrf
        <label for="username">User ID:</label>
        <input
            placeholder="John Doe"
            type="text" 
            id="username" 
            name="username" 
            required 
            style="margin-left: 1rem; margin-bottom: 1rem;">
        <br>
        <label for="password" ">Password:</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            required 
            style="margin-left: 0.5rem; margin-bottom: 1rem;">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>