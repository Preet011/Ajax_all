// Requête simple Fetch
fetch("request.php")
	.then((response) => response.text())
	.then((data) => console.log(data))
	.catch((error) => console.error("Erreur de récupération des données", error));

// Requête asynchrone
async function getData() {
	try {
		const response = await fetch("request.php");
		console.log(response);
		const data = await response.text();
		console.log(data);
	} catch (error) {
		console.error("Erreur de récupération des données", error);
	}
}

getData();

// Requête JSON
// document.querySelector("#jsonResult").addEventListener("click", () => {
// 	fetch("json.php")
// 		.then((response) => {
// 			if (!response.ok) {
// 				throw new Error(
// 					`Erreur de récupération des données: ${response.status}`,
// 				);
// 			}
// 			// console.log(response.json());

// 			return response.json();
// 		})
// 		.then((data) => {
// 			console.log(data);
// 			document.querySelector("#jsonFetch").innerHTML = `<ul>
//                 ${data.map((dat) => `<li>${dat.name} - ${dat.email}</li>`)}
//             </ul>`;
// 		})
//      .catch((error) => console.error("Erreur de récupération des données", error));
// });

// ENCODAGE STRING
// document.querySelector("#stringResult").addEventListener("click", () => {
// 	const name = encodeURIComponent("Louca");
// 	const email = encodeURIComponent("sleeper@email.com");

// 	fetch(`request.php?name=${name}&email=${email}`)
// 		.then((response) => response.text())
// 		.then((data) => {
// 			console.log(data);
// 			document.querySelector("#stringEncode").innerHTML = `${data}`;
// 		})
//      .catch((error) => console.error("Erreur de récupération des données", error));
// });

// ENCODAGE AVEC JSON
// document.querySelector("#encodeResult").addEventListener("click", () => {
// 	const user = {
// 		name: "Louca",
// 		email: "mercier@email.com",
// 	};

// 	// On stringify et on encode les datas envoyés via l'url
// 	const encodeJson = encodeURIComponent(JSON.stringify(user));

// 	// on récupère les datas via l'url donnée, qui contient le paramètre d'objet
// 	fetch(`json2.php?data=${encodeJson}`)
// 		.then((response) => {
// 			console.log(response);

// 			return response.text();
// 		})
// 		.then((data) => {
// 			console.log(data);
// 			document.querySelector("#jsonEncode").innerHTML = data;
// 		})
// 		.catch((error) =>
// 			console.error("Erreur de récupération des données", error),
// 		);
// });
