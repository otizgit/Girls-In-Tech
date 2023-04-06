<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/donate.css">
</head>
<body>
    <div class="donate-form">
        <form>
            <div class="form-row">
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
            </div>

            <div class="form-row">
                <input type="email" placeholder="Email" required>
                <input class="donate-phone-number" type="number" placeholder="Phone Number" required>
            </div>

            <div class="form-col">
                    <label for="items">Items to donate:</label>
                    <select class="donate-items" id="items" required>
                        <option value="select">Select an item:</option>
                        <option value="cash">Donate in cash?</option>
                        <option value="laptops">Laptop</option>
                        <option value="desktop">Desktop</option>
                        <option value="smartphone">Smartphone</option>
                        <option value="keyboard">Keyboard and Mouse</option>
                        <option value="monitors">Monitor</option>
                        <option value="tablets">Tablet</option>
                        <option value="wifi">Wi-Fi router and Modem</option>
                    </select>
            </div>

            <div class="form-col input-form-col">
                <label for="amount">Enter amount to donate</label>
                <input type="number" id="amount">
            </div>

            <button class="donate-btn" type="submit"><i class="fa-solid fa-paper-plane"></i> SUBMIT</button>
        </form>
    </div>
</body>
</html>