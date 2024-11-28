

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_ajax</title>
</head>
<body>
<h1>Connexion</h1>
    <form id="loginForm">
        <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" >
        <input type="password" id="password" name="password" placeholder="Mot de passe" >
        <button type="submit">Se connecter</button>
    </form>
    <p id="message"></p>

    <script>

document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(e.target);

            fetch('login.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    window.location.href = 'dashboard.php';
                } else {
                    document.getElementById('message').innerText = data.message;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>