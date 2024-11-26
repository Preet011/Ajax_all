<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte</title>
</head>
<body>
<h1>Générateur de carte de visite</h1>

<form id="form">

    <label for="name">Full Name :</label>
        <input type="text" name="name" id="name" required />
        <br>
        <br>
    <label for="email">Email :</label>
        <input type="email" name="email" id="email" required />
        <br>
        <br>
    <label for="number">Phone:</label>
        <input type="tel" name="number" id="number" required />
        <br>
        <br>
    <label for="poste">Poste :</label>
        <input type="text" name="poste" id="poste" required />
        <br>
        <br>
    <label for="Logo">Logo:</label>
        <input type="file" name="logo" id="logo">

</form>
    <br>
    <button id="send">Show</button>
    <br>
    <div id="result"></div>
<script>

document.getElementById("send").addEventListener("click", async (event) => {
            event.preventDefault(); // Empêche le rechargement de la page

            const formData = new FormData;
            
            formData.append("name", document.getElementById("name").value);
            formData.append("email", document.getElementById("email").value);
            formData.append("number", document.getElementById("number").value);
            formData.append("poste", document.getElementById("poste").value);
            formData.append("logo", document.getElementById("logo").files[0]);

            try {
                const response = await fetch("carte.php", {
                    method: "POST",
                    body: formData,
                });

                const result = await response.text();
                document.getElementById("result").innerHTML = result;
            } catch (error) {
                console.error("Erreur au niveau de la requête:", error);
                document.getElementById("result").innerHTML = "Une erreur est survenue.";
            }
        });

</script>
</body>
</html>