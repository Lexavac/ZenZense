/*=============== SHOW MODAL ===============*/
const openBtn = document.getElementById("open-modal");
var modalContainer = document.getElementById("modal-container")

//     openBtn.addEventListener('click', ()=>{

  function Open_click(img, cate, name, price, url) {

    $.ajax({
      type: "GET",
      url: url,
      data: "data",
      success: function (response) {
        var imgCart = img;
        var ctgryCart = cate;
        var nameCart = name;
        var priceCart = price;
        modalContainer.classList.add('show-modal');
        document.getElementById("textmodal").textContent= response;
        document.getElementById("img-cart-modal").src= imgCart;
        document.getElementById("ctgry-cart-modal").textContent= ctgryCart;
        document.getElementById("name-cart-modal").textContent= nameCart;
        document.getElementById("price-cart-modal").textContent= priceCart;
        console.log(imgCart)
      }
    });
    
  }
/*=============== CLOSE MODAL ===============*/


setInterval(() => {
const modalContainer = document.getElementById('modal-container')
modalContainer.classList.remove('show-modal')

}, 5000);