<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
</head>
<body>
    <h1>Add Stock Market Company</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('formcompany.store') }}" method="POST">
        @csrf
        <label>Company Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Symbol:</label><br>
        <input type="text" name="symbol" required><br><br>

        <label>Sector:</label><br>
        <input type="text" name="sector"><br><br>

        <label>Industry:</label><br>
        <input type="text" name="industry"><br><br>

        <label>Market Cap:</label><br>
        <input type="number" name="market_cap" step="0.01"><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
