<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendelés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            padding: 0 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .submit-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Rendelés</h1>
    <form action="/submit-order" method="post">
        <fieldset>
            <legend>Szállítási cím</legend>
            <label for="name">Név</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Cím</label>
            <textarea id="address" name="address" rows="3" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Fizetési mód</legend>
            <input type="radio" id="payment1" name="payment_method" value="bank_transfer" required>
            <label for="payment1">Banki átutalás</label><br>

            <input type="radio" id="payment2" name="payment_method" value="credit_card">
            <label for="payment2">Bankkártya</label><br>

            <input type="radio" id="payment3" name="payment_method" value="cash_on_delivery">
            <label for="payment3">Helyszíni átvétel</label>
        </fieldset>

        <fieldset>
            <legend>Termék kiválasztása</legend>
            <select name="product" required>
                <option value="" disabled selected>Válassz terméket...</option>
                <option value="product1">Termék 1</option>
                <option value="product2">Termék 2</option>
                <option value="product3">Termék 3</option>
            </select>
            <button type="submit">Rendelés megerősítése</button>
        </fieldset>


