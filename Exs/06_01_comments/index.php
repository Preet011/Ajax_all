
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments_MySql</title>
</head>
<body>
<h1>Système de commentaires</h1>
    <form id="commentForm">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" />
        <br>
        <br>
        <label for="comment">Commentaire :</label>
        <textarea id="comment" name="comment" ></textarea>
        <br>
        <br>
        <button type="submit">Envoyer</button>
    </form>

    <h2>Commentaires :</h2>
    <div id="comments">

    </div>

<script>

function submitForm(){
    event.preventDefault();

    const formData = new FormData(document.getElementById('commentForm'));
    fetch('addComment.php',{
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => console.log(loadComments()))
    .catch(error => console.error('Error:',error));
};

function loadComments(){
    fetch('getComment.php')
    .then(response => response.text())
    .then(data => {console.log(data);
        document.getElementById('comments').innerHTML = data;
    })
    .catch(error => console.error('Error:',error));
};

document.addEventListener('submit', () => {
    document.getElementById('commentForm').addEventListener('submit', submitForm);
    loadComments();
});

loadComments();
</script>
</body>
</html>

<!--    if(!empty($pseudo) && !empty($comment)){} else { document.getElementById('comments').innerHTML = "input required";} -->