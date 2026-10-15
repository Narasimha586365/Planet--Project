<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Web Project</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 40px 50px;
            max-width: 560px;
            width: 90%;
            text-align: center;
        }
        h1 { color: #2c3e50; margin-bottom: 28px; }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.9rem;
        }
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #ecf0f1;
        }
        td:first-child { color: #7f8c8d; width: 45%; }
        td:last-child { color: #2c3e50; font-weight: 600; }
        .footer {
            margin-top: 24px;
            font-size: 0.78rem;
            color: #bdc3c7;
        }
    </style>
</head>
<body>
<div class="card">
    <h1>Welcome to My Web Project</h1>

    <?php
        $phpVersion    = htmlspecialchars(phpversion(), ENT_QUOTES, 'UTF-8');
        $serverSoftware = htmlspecialchars(
            $_SERVER['SERVER_SOFTWARE'] ?? 'PHP Built-in Server',
            ENT_QUOTES,
            'UTF-8'
        );
        $serverTime    = htmlspecialchars(date('d M Y, h:i A'), ENT_QUOTES, 'UTF-8');
        $documentRoot  = htmlspecialchars(
            $_SERVER['DOCUMENT_ROOT'] ?: 'D:\PLANET PROJECT',
            ENT_QUOTES,
            'UTF-8'
        );
    ?>

    <table>
        <tr>
            <td>PHP Version</td>
            <td><?php echo $phpVersion; ?></td>
        </tr>
        <tr>
            <td>Server Software</td>
            <td><?php echo $serverSoftware; ?></td>
        </tr>
        <tr>
            <td>Server Time</td>
            <td><?php echo $serverTime; ?></td>
        </tr>
        <tr>
            <td>Document Root</td>
            <td><?php echo $documentRoot; ?></td>
        </tr>
    </table>

    <p class="footer">PHP <?php echo $phpVersion; ?></p>
</div>
</body>
</html>
