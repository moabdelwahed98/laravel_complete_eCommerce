
const cartElements = document.querySelector(".cart-elements");
const smallModal = document.getElementById("sm-modal");
const cartImg =
    "https://shop.unicornstore.in/beam/themes/2019/assets/img/cart_empty.png";
const container = document.querySelector(".flex-container");
let jsonArray = [];
let cartArray = JSON.parse(localStorage.getItem("data")) || [];

fetch("https://fakestoreapi.com/products")
    .then(searchResponse)
    .then(searchJson)
    .catch((error) => console.log(error));

function searchResponse(response) {
    return response.json();
}

function searchJson(json) {

    const results = json.length;

    container.innerHTML = "";

    for (let i = 0; i < results; i++) {

        const products_data = json[i];

        const title = products_data.title;
        const id = products_data.id;
        const selected_image = products_data.image;
        const price = products_data.price;

        const product = document.createElement("div");

        const mainImg = document.createElement("img");
        mainImg.src = selected_image;

        const mainTitle = document.createElement("h5");
        mainTitle.textContent = title;
        const mainPrice = document.createElement("h4");
        mainPrice.textContent = "€" + price;

        const cartImage = document.createElement("img");
        cartImage.src = cartImg;
        cartImage.classList.add("carticon");
        cartImage.onclick = function () {
            smallModal.classList.add("appear");
            addToCart(id);
        };

        product.appendChild(mainImg);
        product.appendChild(mainTitle);
        product.appendChild(mainPrice);
        product.appendChild(cartImage);
        container.appendChild(product);

        jsonArray.push(products_data);
    }
}

function addToCart(id) {
    if (cartArray.some((item) => item.id === id)) {
        smallModal.classList.remove("appear");
        alert("Product already in cart, you can increase the quantity from there!");
    } else {
        setTimeout(() => {
            smallModal.classList.remove("appear");
        }, 2000);
        let item = jsonArray.find((product) => product.id === id);
        cartArray.push(item);
        localStorage.setItem("data", JSON.stringify(cartArray)); // bug of starting from zero again
    }

}

