



var removeItem=document.getElementsByClassName('btn-danger');
for(let i=0;i<removeItem.length;i++){
	var button=removeItem[i];
	button.addEventListener('click',function(event){
		var buttonClicked=event.target;
		buttonClicked.parentElement.parentElement.remove();
		updateCartTotal();
	})	
}

var quantityInputs=document.getElementsByClassName('productQuantity');
for(var i=0;i<quantityInputs.length;i++){
	var input=quantityInputs[i];
	input.addEventListener('change',quantityChanged);
}


function quantityChanged(event){
	var input=event.target;
	if(isNaN(input.value)){
		input.value=1;
	}
	
	

	updateCartTotal();
}

function updateCartTotal(){
	var cartItemContainer=document.getElementsByClassName('cartItems')[0];
	var cartRows=cartItemContainer.getElementsByClassName('product');
	var total=0;
	var productTotal=document.getElementsByClassName('productTotal');
	for(var i=0;i<cartRows.length;i++){
		
		var cartRow=cartRows[i];
		var priceElement=cartRow.getElementsByClassName('productPrice')[0];
		var quantityElement=cartRow.getElementsByClassName('productQuantity')[0];

		//console.log(quantityElement.value);
		
		var price=parseFloat(priceElement.innerText);
			var quantity=parseInt(quantityElement.value);
			console.log(price+" "+ quantity);
		total+=(price*quantity);
		localStorage.setItem("currentTotal",total);
		productTotal[i].innerText=price*quantity;

	}
	total=Math.round(total*100)/100;
	document.getElementsByClassName('total')[0].innerText='$'+ total;
}


//adding to cart
var addToCartButtons=document.getElementsByClassName('addToCart');
for(var i=0;i<addToCartButtons.length;i++){
	var button=addToCartButtons[i];
	button.addEventListener('click', addToCartClicked);

}

function addToCartClicked(event){
	event.preventDefault();
	var button=event.target;
	var shopItem=button.parentElement.parentElement;
	var title=shopItem.getElementsByClassName('itemName')[0].innerText;
	var price=shopItem.getElementsByClassName('itemPrice')[0].innerText;
	console.log(title,price);
	addItemToCart(title,price);
	
}

function addItemToCart(title,price){
	var cartRow=document.createElement('div');
	cartRow.classList.add('product');
	var cartItems=document.getElementsByClassName('cartItems')[0];
	
	var cartRowContents=`<div class="product px-3">
	 	<div id="productName">
	 		<h3>${title}</h3>
	 	</div>
	 	<div id="productPrice" class="productPrice">
	 		${price}
	 	</div>
	 	<div id="productQuantity" >
	 		<input type="number"  class="productQuantity" value="1" min="1" name="">
	 	</div>
	 	<div id="productRemoval">
	 		<button id="removeProduct" class="btn btn-danger">Remove</button>
	 	</div>
	 	
	 	<div id="productTotal">4</div>

	 </div> `;

          cartRow.innerHTML=cartRowContents;
	cartItems.append(cartRow);
}


//checkout

var checkOut=document.getElementById('checkOut');
checkOut.addEventListener('click',function(){
	let total=document.getElementById('totalOrder').innerHTML.replace("$","");
	localStorage.setItem("totalOrder", total);
})



