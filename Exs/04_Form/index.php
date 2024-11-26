<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Json</title>
</head>
<body>

<form id="form">

    <label for="name">Name :</label>
        <input type="text" name="name" id="name" required />
        <br>
        <br>
    <label for="email">Email :</label>
        <input type="email" name="email" id="email" required />
        <br>
        <br>
    <label for="text">Message:</label>
        <br>
        <br>
        <textarea name="text" id="text"></textarea>

</form>

    <button id="send">Send</button>
    <br>
    <div id="result"></div>

<script>
// document.getElementById("contactForm").addEventListener("submit", async (event) => {
        //     event.preventDefault(); // Empêche le rechargement de la page

        //     const formData = new FormData(event.target); // Autre manière

        //     try {
        //         const response = await fetch("contact.php", {
        //             method: "POST",
        //             body: formData,
        //         });

        //         const result = await response.text();
        //         document.getElementById("result").innerHTML = result;
        //     } catch (error) {
        //         console.error("Erreur au niveau de la requête:", error);
        //         document.getElementById("result").innerHTML = "Une erreur est survenue.";
        //     }
        // });
    document.getElementById('send').addEventListener("click", async (event) => {
            event.preventDefault();

            const formData = new FormData();
            formData.append("name", document.getElementById("name").value);
            formData.append("email", document.getElementById("email").value);
            formData.append("text", document.getElementById("text").value);

            try {
                const response = await fetch("form.php", {
                method: "POST",
                body: formData,
            });
            const data = await response.text();
            console.log(data);

            document.getElementById("result").innerHTML = data;

            } catch (error) {
                console.error("Erreur lors de la soumission des données: ", error);
            }
    ;
    })


</script>
</body>
</html>