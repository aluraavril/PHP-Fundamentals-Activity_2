<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
            margin: 20px; 
        }
        table {
            width: 50%;
            margin-bottom: 20px;
            border-collapse: collapse; 
        }
        th, td {
            padding: 8px; 
            text-align: left;
            border: 1px solid #ddd; 
        }
        th {
            font-weight: bold;
            background-color: #f2f2f2;
        }
        input, select {
            font-size: 16px;
            margin: 10px 0;
        }
        .error {
            color: red;
        }
        .receipt {
            margin-top: 20px;
            padding: 15px; 
            border: 2px solid #333; 
            border-radius: 5px; 
            background-color: #f9f9f9; 
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>
<body>
    <h1>Menu</h1>

    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form method="POST" action="process_order.php">
        <label for="order">Select an order:</label>
        <select name="order" id="order" required>
            <option value="Burger">Burger - 50</option>
            <option value="Fries">Fries - 75</option>
            <option value="Steak">Steak - 150</option>
        </select>
        <br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>
        <br>

        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="1" required>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
