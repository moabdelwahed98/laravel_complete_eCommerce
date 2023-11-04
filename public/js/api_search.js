

const container = document.querySelector('.flex-container');

function search(event)
{
    event.preventDefault();
    const input = document.querySelector('#text');
    const valore = encodeURIComponent(input.value);
    console.log(valore);

    fetch('https://dummyjson.com/products/search?q=' + valore)
    .then(onResponse)
    .then(onJson)
    .catch(error => console.log(`The Error detected is: '  ${error}`));
}

function onResponse(response)
{
    return response.json();
}

function onJson(json)
{
    console.log(json);

    if(json.products.length === 0){
        errore.classList.remove('hidden');
    }else{
        errore.classList.add('hidden');
        console.log(json.products);

        container.innerHTML = "";

        for (let i = 0; i < 6; i++) {

            const products = json.products[i];

            const title = products.title;
            const desc = products.description;
            const selected_image = products.thumbnail;
            const price = products.price;

            const product = document.createElement("div");

            const mainImg = document.createElement("img");
            mainImg.src = selected_image;

            mainTitle = document.createElement("h5");
            mainTitle.textContent = title;
            mainDesc = document.createElement("p");
            mainDesc.textContent = desc;
            mainPrice = document.createElement("h4");
            mainPrice.textContent = "€" + price;

            product.appendChild(mainImg);
            product.appendChild(mainTitle);
            product.appendChild(mainDesc);
            product.appendChild(mainPrice);

            container.appendChild(product);
        }
    }
}

const cerca = document.getElementById("main-form");
const errore = document.getElementById("errore");

cerca.addEventListener("submit", search);


