<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            max-width: 600px;
            margin: auto;
            background: #f9f9f9;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        button {
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            background: #e0e0e0;
            cursor: pointer;
        }

        button:hover {
            background: #d5d5d5;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Add Stock Market Company</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('formcompany.store') }}" method="POST">
        @csrf

        <label>Company Name:</label>
        <input type="text" name="name" required>

        <label>About the Company:</label>
        <textarea name="about" rows="5" required></textarea>

        <label>Market Cap (in ₹ Crores):</label>
        <input type="number" name="market_cap" step="0.01">

        <label>Current Price (₹):</label>
        <input type="number" name="current_price" step="0.01">

        <label>High / Low (₹):</label>
        <input type="text" name="high_low" placeholder="e.g. 1500 / 900">

        <label>Stock P/E:</label>
        <input type="number" name="stock_pe" step="0.01">

        <label>Book Value (₹):</label>
        <input type="number" name="book_value" step="0.01">

        <label>Dividend Yield (%):</label>
        <input type="number" name="dividend_yield" step="0.01">

        <label>ROCE (%):</label>
        <input type="number" name="roce" step="0.01">

        <label>ROE (%):</label>
        <input type="number" name="roe" step="0.01">

        <!-- New Field: Face Value -->
        <label>Face Value (₹):</label>
        <input type="number" name="face_value" step="0.01">

        <!-- New Field: URL (as text) -->
        <label>Company Website URL:</label>
        <input type="text" name="url" placeholder="e.g. https://www.example.com">

        <button type="submit">Save</button>
    </form>
</body>
</html>
