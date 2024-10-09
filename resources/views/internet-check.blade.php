<!-- resources/views/internet-check.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Connection Check</title>
    <script>
        function checkInternetConnection() {
            const inputField = document.getElementById('internet-status');
            if (navigator.onLine) {
                inputField.value = 'You are connected to the internet';
                inputField.disabled = false;
            } else {
                inputField.value = 'No internet connection';
                inputField.disabled = true;
            }
        }

        // Check internet connection on page load and when the connection status changes
        window.addEventListener('load', checkInternetConnection);
        window.addEventListener('online', checkInternetConnection);
        window.addEventListener('offline', checkInternetConnection);
    </script>
</head>
<body>
    <div style="margin-top: 50px; text-align: center;">
        <h1>Internet Connection Status</h1>
        <form>
            <input type="text" id="internet-status" value="Checking connection..." disabled>
        </form>
    </div>
</body>
</html>
