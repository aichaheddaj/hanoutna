let article = document.querySelector(".container");
let cart = document.querySelector(".element");
let totalElement = document.querySelector("#total");

let cartList = [];
let products = [];

let req = new XMLHttpRequest();
req.open("get", "index.php");


   function updateList( ) {
    let str = "";
    let total = 0;

    cartList.forEach(e => {
            total += e.prix * e.qtt;

        str += `<div class="element">
                    <img src=${e.image} class="prodimgmin" style="width:40px; height:40px;">
                    <div>${e.titre}</div>

                    <div>${e.qtt}</div>
                    <div onclick="deleteProd(${e.id})" class="delete"><img src="delete.png" class="delete"></div>
                </div>`;
    });

    cart.innerHTML = str;
    totalElement.innerHTML = `Total: ${total}`;
}


function addProduct(id) {
    let p = products.find(e => e.id === id);
    let e = cartList.find(e => e.id == p.id);
    if (e) p.qtt++;
    else {
        p.qtt = 1;
        cartList.push(p);
    }
    updateList();
}

function deleteProd(id) {
    cartList = cartList.filter(e => e.id !== id);
    updateList();
}

function search(e) {
    // cartList=cartList.filter()
    console.log(e.value);
}

req.onreadystatechange = () => {
    if (req.status == 200 && req.readyState == 4) {
        products = JSON.parse(req.response);
        console.log(products);
        str = "";
        products.forEach(e => {
            str += `<div class="produit">
                    <img src=${e.image} alt="" class="prodimg">
                    <div class="titre">${e.titre}</div>
                    <div class="prix">${e.prix}</div>
                    <div  onclick="addProduct(${e.id})"> <img src="add.png" style="    position: absolute; margin-top:-190px; margin-right: 50px;"  class="add"></a>
                    </div>
                    <a href="details.php?id=${e.id}" class="detail">Detail</a>
                </div>`;
        });
        article.innerHTML = str;
    }
};

req.send();
