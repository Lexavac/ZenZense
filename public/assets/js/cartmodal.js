/*=============== SHOW MODAL ===============*/
const openBtn = document.getElementById("open-modal");
var modalContainer = document.getElementById("modal-container")

//     openBtn.addEventListener('click', ()=>{

  function Open_click(clicked) {
    var imgCart = document.querySelector(".img-card img").src;
    var ctgryCart = document.getElementById("ctgry").textContent;``
    var nameCart = document.getElementById("name-prod").textContent;
    var priceCart = document.getElementById("prc-prod").textContent;
        modalContainer.classList.add('show-modal');
        document.getElementById("img-cart-modal").src= imgCart;
        document.getElementById("ctgry-cart-modal").textContent= ctgryCart;
        document.getElementById("name-cart-modal").textContent= nameCart;
        document.getElementById("price-cart-modal").textContent= priceCart;
        console.log(imgCart)
}        
/*=============== CLOSE MODAL ===============*/


setInterval(() => {
const modalContainer = document.getElementById('modal-container')
modalContainer.classList.remove('show-modal')

}, 5000);