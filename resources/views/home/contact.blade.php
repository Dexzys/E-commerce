<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        .contact_section {
            padding: 30px 0; /* Adjusted padding */
            background-color: #f9f9f9; /* Light background color */
        }
        .heading_container {
            text-align: center;
            margin-bottom: 40px;
        }
        .heading_container h2 {
            font-size: 36px;
            color: #333;
        }
        .container-bg {
            align-items: center;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            width: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto; /* Center the container horizontally */
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form div {
            margin-bottom: 15px;
            width: 100%;
            max-width: 400px; /* Limit the width of the form */
        }
        form input, form .message-box {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        form .message-box {
            height: 150px;
            resize: none;
        }
        form button {
            padding: 12px 40px; /* Adjusted padding for an oblongish shape */
            background-color: #4CAF50; /* Green color */
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 50px; /* Adjusted border radius for a more circular shape */
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049; /* Darker green color on hover */
        }
        button {
          border-radius: 50px;
        }
    </style>
</head>
<body>
<section class="contact_section">
    <div class="container">
        <div class="heading_container">
            <h2>Contact Us</h2>
        </div>
        <div class="container-bg">
            <form action="#">
                <div>
                    <input type="text" placeholder="Name" />
                </div>
                <div>
                    <input type="email" placeholder="Email" />
                </div>
                <div>
                    <input type="text" placeholder="Phone" />
                </div>
                <div>
                    <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div>
                    <button>SEND</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
