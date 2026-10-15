# My Web Project

A simple PHP web project for local development using XAMPP.

---

## Required Software

| Software | Version | Download |
|----------|---------|----------|
| XAMPP | Latest | https://www.apachefriends.org |
| PHP | 8.2.12 (included in XAMPP) | Included |
| VS Code | Latest | https://code.visualstudio.com |

---

## Folder Structure

```
D:\PLANET PROJECT\
    index.php       <-- Main welcome page
    README.md       <-- This file
```

---

## How to Run Locally

This project uses the PHP built-in development server. No Apache configuration or file moving is required.

1. Open **Command Prompt** (`Win + R` → type `cmd` → press Enter)

2. Navigate to the project folder:
   ```
   cd /d "D:\PLANET PROJECT"
   ```

3. Start the PHP built-in server:
   ```
   D:\XAMPP\php\php.exe -S localhost:8000
   ```

4. Open your browser and go to:
   ```
   http://localhost:8000
   ```
   You should see the welcome page displaying your PHP version and server details.

5. To stop the server, go back to the Command Prompt window and press `Ctrl + C`.

---

## Verifying the Setup

Once the page loads at `http://localhost:8000`, confirm it shows:

- PHP version `8.2.12`
- Server software name
- Current server date and time
- Document root path

If all four values appear, the environment is working correctly.

---

## Troubleshooting

**PHP code shows as plain text?**
- You opened the `.php` file directly in a browser — always use `http://localhost:8000` instead.

**"php" is not recognized?**
- Use the full path to PHP: `D:\XAMPP\php\php.exe -S localhost:8000`

**Port 8000 already in use?**
- Try a different port: `D:\XAMPP\php\php.exe -S localhost:8080`
- Then open `http://localhost:8080` in your browser.

**Page does not load?**
- Make sure the Command Prompt is still open and the server is running.
- Check that you navigated to the correct folder before starting the server.

---

## Notes

- Do not open `.php` files directly in a browser — always use `http://localhost:8000`.
- All project files stay in `D:\PLANET PROJECT`.
