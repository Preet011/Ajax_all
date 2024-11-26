<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST PHP avec Ajax</title>
</head>
<body>
    <h2>POST de données simples avec Fetch</h2>
    <button id="send">Envoyer les données</button>
    <div id="result"></div>

    <script>
        document.querySelector("#send").addEventListener("click", () => {
            fetch("process.php", {
                method: "POST",
                body: "name=Thierry&email=thierry@email.com",
                headers : {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
                .then((response) => response.text())
                .then((data) => document.querySelector("#result").innerHTML = data)
                .catch((error) => console.error("Erreur lors de la soumission des données: ", error));
        })
    </script>


    <hr>

    <h2>POST de données JSON avec Fetch</h2>
    <button id="sendjson">Envoyer les données</button>
    <div id="resultJson"></div>

    <script>
        document.querySelector("#sendjson").addEventListener("click", () => {
            fetch("server.php", {
                method: "POST",
                body: JSON.stringify({name: "Thierry", email: "thierry@email.com"}),
                headers : {
                    "Content-Type": "application/json"
                }
            })
                .then((response) => response.text())
                .then((data) => {
                    console.log(data);
                    document.querySelector("#resultJson").innerHTML = data})
                 .catch((error) => console.error("Erreur lors de la soumission des données: ", error));
        })
    </script>

    <h2>POST de données via FORMDATA avec Fetch</h2>
    <form id="uploadForm">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required />
        <br>
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required />
        <br>
        <br>
        <label for="photo">Photo de profil:</label>
        <input type="file" name="photo" id="photo">
    </form>
    <br>
    <br>
    <button id="upload">Soumettre les données</button>
    <br>
    <br>
    <div id="resultData"></div>

    <script>
        document.getElementById("upload").addEventListener("click", async (event) => {
            // event.preventDefault();
            console.log('hey !');


            const formData = new FormData();
            formData.append("name", document.getElementById("name").value);
            formData.append("email", document.getElementById("email").value);
            formData.append("photo", document.getElementById("photo").files[0]);

            try {
                const response = await fetch("upload.php", {
                    method: "POST",
                    body: formData,
                });
                const res = await response.text();
                console.log(res);

                document.getElementById("resultData").innerHTML = res;

                    // .then((response) => {
                    //    response.text();
                    // //    console.log(response);
                    // })
                    // .then((data) => console.log(data))
            } catch (error) {
                console.error("Erreur lors de la soumission des données: ", error)
            }
        })
    </script>




    <!-- <script src="script.js"></script> -->
</body>
</html>