// $('.parent-container').magnificPopup({
//   delegate: 'a', // child items selector, by clicking on it popup will open
//   type: 'image'
//   // other options
// });
// $('.parent-container').magnificPopup({
//   delegate: 'a', // child items selector, by clicking on it popup will open
//   type: 'image',
//   gallery:{
//   	enabled:true
//   }
//   // other options
// });



//cart

//show cart
function main(){
	const cartInfo=document.getElementById('cart-info');
	const cart=document.getElementById('cart');
	
	cartInfo.addEventListener("click",function(){
		cart.classList.toggle('show-cart');
		

	});
}