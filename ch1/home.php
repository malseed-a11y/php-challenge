<?php
session_start();

if (isset($_SESSION['username'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <style>
            :root {
                --primary-color: hsl(260, 43%, 42%);
                --secondary-color: #ff0000ff;
            }

            body {
                font-family: Arial, sans-serif;
                margin-top: 100px;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                color: var(--primary-color);
            }

            a {
                text-decoration: none;
                color: var(--secondary-color);
            }
        </style>
    </head>

    <body>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>