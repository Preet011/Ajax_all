async function getMsg(){

    try{
        const res = await fetch("async.php");
        console.log(res);
        const data = await res.text();
        //console.log(data);
        document.querySelector("#result").addEventListener("click", () => {
            document.querySelector("#request").innerHTML = `${data}`;
        });
    }
    catch(error){
        console.error("Erreur: ", error);
    }
}

getMsg();