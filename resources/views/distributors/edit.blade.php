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
        <li><a href="#">Upload</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('distributors.update', $distributor->id) }}" method="POST" style="margin-top: 1rem;">
        @method('PUT')
        @csrf
        <div>
            <label>Distributor Name</label>
            <input type="text" name="distributor_name" value="{{ old('distributor_name', $distributor->distributor_name) }}" style="margin-left: 1rem; margin-bottom: 1rem;">
        </div>

        <div>
            <label>City</label>
            <input type="text" name="city" value="{{ old('city', $distributor->city) }}" style="margin-left: 1rem; margin-bottom: 1rem;">
        </div>

        <div>
            <label>State/Region</label>
            <input type="text" name="state" value="{{ old('state', $distributor->state) }}" style="margin-left: 1rem; margin-bottom: 1rem;">
        </div>

        <div>
            <label>Country</label>
            <select name="country" style="margin-left: 1rem; margin-bottom: 1rem;">
                <option value="Australia" {{ old('country', $distributor->country) == 'Australia' ? 'selected' : '' }}>Australia</option>
                <option value="The Netherlands" {{ old('country', $distributor->country) == 'The Netherlands' ? 'selected' : '' }}>The Netherlands</option>
                <option value="Germany" {{ old('country', $distributor->country) == 'Germany' ? 'selected' : '' }}>Germany</option>
            </select>
        </div>

        <div>
            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $distributor->phone) }}" style="margin-left: 1rem; margin-bottom: 1rem;">
        </div>

        <div>
            <label>Email</label>
            <input type="text" name="email" value="{{ old('email', $distributor->email) }}" style="margin-left: 1rem; margin-bottom: 1rem;">
        </div>

        <input type="submit" value="Update">
    </form>
    <p class="footer-date">November 18, 2025</p>
</body>
</html>