
const removeButton = "/assets/close.svg";

let cart = JSON.parse(localStorage.getItem("data")) || [];
console.log(cart);
const box = document.getElementById("basket");

/*****************     Building Cart Structure    ****************/
function addToCart(){
    if(cart.length!== 0){
        box.innerHTML = "";
        for (let i = 0; i < cart.length; i++){

            let row = document.createElement("tr");

            let remove = document.createElement("td");
            let photo = document.createElement("td");
            let title = document.createElement("td");
            let price = document.createElement("td");
            let quantity = document.createElement("td");
            let sub = document.createElement("td");

            let input = document.createElement("input");
            input.type = "number";
            input.value = "1";
            input.min = "1";
            quantity.appendChild(input);

            let X = document.createElement("img");
            X.src = removeButton;
            X.classList.add("remove");
            X.onclick = function () {
                removeFromCart(cart[i].id);
                };

            let imag = document.createElement("img");
            imag.src = cart[i].image;

            remove.appendChild(X);
            photo.appendChild(imag);

            title.textContent = cart[i].title;
            price.textContent = "€" + cart[i].price;

            sub.textContent = "€" + Math.abs(cart[i].price);
            input.addEventListener("input", ()=> {
                sub.textContent = "€" + Math.abs((input.value * cart[i].price).toFixed(2));
                cartSubTotal();
            })
            sub.classList.add("exists");

            row.appendChild(remove);
            row.appendChild(photo);
            row.appendChild(title);
            row.appendChild(price);
            row.appendChild(quantity);
            row.appendChild(sub);

            box.appendChild(row);
        }

    }else{
        document.querySelector(".cart").innerHTML = "";
        document.querySelector(".cart-add").innerHTML = "";
        document.getElementById('clear').style.display = "none";

        box.innerHTML = "";
        const header = document.createElement("h4");
        header.textContent = "Cart is empty!";
        const link = document.createElement("a");
        link.href = shop;
        link.textContent = "Click here";
        box.appendChild(header);
        box.appendChild(link);
        box.classList.add("empty");
        document.querySelector(".cart").appendChild(box);
    }
}
addToCart();

        /*****************     Removing Item    ****************/
function removeFromCart(id){
    cart = cart.filter((item) => item.id !== id);
    localStorage.setItem("data", JSON.stringify(cart));
    addToCart();
    cartSubTotal();
}

        /*****************     Total Price     ****************/
function cartSubTotal(){
    subs = document.querySelectorAll(".exists");
    let tot = 0;
    subs.forEach(element => {
        let price = parseFloat(element.textContent.replace("€", ""));
        tot += price;
    });
    document.querySelector(".amount").textContent = "€" + tot.toFixed(2);
    document.querySelector(".amount-bold").textContent = "€" + tot.toFixed(2);
}
cartSubTotal();


        /*****************     DB Inserting     ****************/
function addingDB(event){

        cart = JSON.parse(localStorage.getItem("data")) || [];

        for(let i = 0; i < cart.length; i++){

            const formData = new FormData();
            formData.append('id', cart[i].id);
            formData.append('title', cart[i].title);
            formData.append('image', cart[i].image);
            formData.append('price', cart[i].price);
            formData.append('_token', csrf_token);

            fetch(INSERT_URL + "insert", {
                method: "post",
                body: formData
            }).then(function(response){
                return response.json();
            }).then(function(data){
                console.log(data);
            });
        }
}

const checkout = document.getElementById("check_out");
checkout.addEventListener("click", function(){
    addingDB();
    modal();
});

        /*****************     MODAL     ****************/
function modal(){
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    document.body.classList.add("modal-open");

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            document.body.classList.remove("modal-open");
        }
    }
}
        /*****************     Clean Cart     ****************/
const clearAll = document.getElementById('clear');
clearAll.addEventListener('click', Cleaning);

function Cleaning (){
        localStorage.clear();
        cart = JSON.parse(localStorage.getItem("data")) || [];
        addToCart();
}


