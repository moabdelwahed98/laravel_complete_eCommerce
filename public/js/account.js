
  /    *      START       *    /

const removeButton = "/assets/close.svg";
const container = document.querySelector(".flex-container");
let jsonArray = [];
//let cartArray = [];

fetch("/account/data")
  .then(onResponse)
  .then(onJson)
  .catch((error) => console.log(error));

function onResponse(response) {
  return response.json();
}

function onJson(json) {
    console.log(json);
    add(json);
}

function add(json){
    if(json.length === 0){
        container.innerHTML = "";
        const header = document.createElement("h2");
        header.textContent = "Niente da visualizzare da DB!";
        container.appendChild(header);
    }else{
        container.innerHTML = "";
        for (let i = 0; i < json.length; i++) {
            const title = json[i].title;
            const orderId = json[i].order_id;
            const userId = json[i].user_id;
            const selected_image = json[i].image;
            const price = json[i].price;
            const product = document.createElement("div");
            const mainImg = document.createElement("img");
            mainImg.src = selected_image;
            const mainTitle = document.createElement("h5");
            mainTitle.textContent = title;
            const mainPrice = document.createElement("h4");
            mainPrice.textContent = "€" + price;
            const X = document.createElement("img");
            X.src = removeButton;
            X.classList.add("carticon2");
            X.addEventListener('click', ()=> {
                remove(orderId, userId);
            })
            product.appendChild(X);
            product.appendChild(mainImg);
            product.appendChild(mainTitle);
            product.appendChild(mainPrice);
            container.appendChild(product);
            jsonArray.push(json[i]);
        }
    }
}

function remove(orderId, userId){

    fetch('account/data/' + encodeURIComponent(orderId) + '/' + encodeURIComponent(userId))
    .then(function(response){
            return response.json();
        })
    .then(function(data){
            console.log(data);
            add(data);
        })
    .catch( error => `Error is ${error}`);
}
