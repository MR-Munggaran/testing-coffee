<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu {
            list-style: none;     
            padding: 0;
            margin: 0;
            display: flex;      
            gap: 20px;         
            justify-content:space-around;
            width: 100%;  
        }

        .menu li a {
            text-decoration: none;
            background-color: maroon;
            color: white;
            font-weight: 500;
            padding: 0px 7rem;
            display: block;
            font-size: 20px;
        }
        .header {
            display: flex;
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
        .footer-date {
            text-align: center;
            margin-top: 40px;
            font-size: 15px;
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
    <ul class="menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('catalog') }}">Catalog</a></li>
        <li><a href="#">Order Status</a></li>
        <li><a href="{{ route('distributors.index') }}">Distributors</a></li>
        <li><a href="{{ route('uploads.create') }}">Upload</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
    <table>
        <tr>
            <th>Distributor Name</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
        @foreach ($distributors as $distributor)
        <tr @if($loop->first) class="red" @endif>
            <td>{{ $distributor->distributor_name }}</td>
            <td>{{ $distributor->city }}</td>
            <td><a href="{{ route('distributors.edit', $distributor->id) }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('distributors.create') }}">Add</a>
    <p class="footer-date">November 18, 2025</p>
</body>
</html>