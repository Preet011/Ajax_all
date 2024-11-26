const searchInput = document.querySelector("#search");
const resultsList = document.querySelector("#results");

// Détecte les changements dans le champ de recherche
searchInput.addEventListener("input", async () => {
	const query = encodeURIComponent(searchInput.value);

	try {
		// Effectue une requête AJAX au serveur
		const response = await fetch(`users.php?q=${query}`);

		// Vérifie si la requête a réussi
		if (!response.ok) throw new Error("Erreur serveur");

		// Récupère et parse les données JSON
		const users = await response.json();

		// Met à jour l'affichage
		resultsList.innerHTML = users.map((user) => `<li>${user}</li>`).join("");
	} catch (error) {
		console.error("Erreur AJAX :", error);
		resultsList.innerHTML = "<li>Une erreur est survenue</li>";
	}
});


// async function getUser(){

//     try {
// 		const response = await fetch("filter.php");
// 		console.log(response);
// 		const data = await response.json();

//         document.querySelector("#results").innerHTML= ` ${data.map((dat) =>`<li>${dat} </li>` )}`;

//  const search = document.querySelector("#search");

//  function search(){
//     data.map((data)
//     if (search.value == data){



//     }

// 		//console.log(result);
// 	} }catch (error) {
// 		console.error("Erreur de récupération des données", error);
// 	}
// }


// getUser();