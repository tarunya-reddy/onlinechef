<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Body Styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
           /* background: linear-gradient(5deg, #bdc613, #4b4b4a);*/
           background-color: whitesmoke;
        }

        /* Profile Card Styling */
        .profile-card {
            background: #fff;
            width: 350px;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .profile-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        /* Profile Initial Styling */
        .profile-initial {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: gray;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: bold;
            margin: 0 auto 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading and Field Labels */
        h2 {
            color: #333;
            font-size: 26px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .field-label {
            color: #777;
            font-size: 14px;
            margin-top: 20px;
            font-weight: bold;
            text-align: left;
        }

        /* Field Content Styling */
        .field-content, .field-input {
            color: #555;
            font-size: 15px;
            margin-top: 8px;
            background-color: #f3f4f6;
            padding: 10px 15px;
            border-radius: 12px;
            width: 100%;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            border: none;
            outline: none;
            text-align: center;
        }

        /* Button Styling */
        .contact-button, .save-button, .orders-button {
            padding: 12px 25px;
            background: gray;
            border: none;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .contact-button:hover, .save-button:hover, .orders-button:hover {
            background: #ffc3a0;
        }

        /* Flex container for buttons */
        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 25px;
        }

        /* Form Styling */
        .profile-form {
            display: flex;
            flex-direction: column;
            align-items: left;
            gap: 15px;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <!-- Profile Initial instead of image -->
        <div class="profile-initial" id="profile-initial"></div>
        <h2 id="username">LOKESH </h2>

        <div class="field-label">Username</div>
        <div class="field-content" id="username-field">Vaishnavi    </div>

        <form class="profile-form">
            <div class="field-label">Email or Phone</div>
            <input type="text" class="field-input" value="john.doe@example.com" />

            <div class="field-label">Address</div>
            <input type="text" class="field-input" value="123 Main St, New York, NY" />

            <!-- Button Container for View Orders and Save Changes -->
            <div class="button-container">
                <a href="/orders" class="orders-button">View Orders History</a>
                <button type="button" class="save-button">Save Changes</button>
            </div>
        </form>
    </div>

    <script>
        // Function to set the initial of the username dynamically
        function setProfileInitial() {
            const username = document.getElementById('username-field').textContent;
            const profileInitial = document.getElementById('profile-initial');
            if (username) {
                profileInitial.textContent = username.charAt(0).toUpperCase();
            }
        }

        // Call the function to set the initial when the page loads
        window.onload = setProfileInitial;
    </script>

</body>
</html>
