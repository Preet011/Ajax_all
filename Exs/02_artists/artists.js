
async function artists(){

    try{
        const response = await fetch("artists.php");

        //console.log(response);

        const data = await response.json();

        //console.log(data);
        document.querySelector("#loading").addEventListener("click", () => {
            document.querySelector("#artists").innerHTML = ` ${data.map((dat) => `<li>${dat} </li>`)}`;
        });
    }
    catch(error){
        console.error("Erreur: ", error);
    }
}

artists();