// api url
const api_url =
    "http://127.0.0.1:8000/";
    myrow = document.getElementById('clients_row');

    // const cat_btn = document.getElementById('cat_btn');
    // const dog_btn = document.getElementById('dog_btn');
    // const cat_result = document.getElementById('cat_result');
    // const dog_result = document.getElementById('dog_result');
    
    // cat_btn.addEventListener('click', getRandomCat);
    // dog_btn.addEventListener('click', getRandomDog);
    console.log("hello api page bro or dude Shmmmmmmm");
    function getData() {
        // url = "http://127.0.0.1:8000/"
        url = "my.txt"
        fetch(url,{mode:"no-cors"}).then((response)=>{
            return response.json();
        }).then((data)=>{
            console.log(data);
            console.log("data");
        })
    }
    
    getData()