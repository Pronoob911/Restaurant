
(function (){

	//select options

	const services=[
	{
		value:1,
		title:'great -20%'
	},
	{
		value:2,
		title:'ok-10%'
	},
	{
		value:3,
		title:'bad-2%'
	}

]

//add select options to the select element

services.forEach(function(service){
	const option=document.createElement('option');
	option.textContent=service.title;
	option.value=service.value;

	document.getElementById('input-service').appendChild(option);


});

//get all the values

const form=document.getElementById('tip-form');
var amount=document.getElementById('input-bill');

const users=document.getElementById('input-users');
const service=document.getElementById('input-service');

var currentTotal=localStorage.getItem("currentTotal");
amount.value=currentTotal;

const feedback=document.querySelector(".feedback");
const loader=document.querySelector(".loader");
const results=document.querySelector(".results");

//submit form
form.addEventListener('submit', function(event){
	event.preventDefault();
	let bill=amount.value;
	let people=users.value;
	let quality=service.value;

	feedback.classList.add('showItem','alert-success');
	feedback.innerHTML=`<p>calculating...</p>`;
	setTimeout(function(){
		loader.classList.remove('showItem',"alert-success");
		showResults(bill,people,quality);
		clearForm();  //to clear the form

	},2000)
})

function showResults(bill,people,quality){
	let percent=0;

	if(quality=='1'){
		percent=0.2;
	}
	else if(quality=='2'){
		percent=0.1;
	}
	else if(quality=='3')
		percent=0.02;

	let tipAmount=parseInt(bill) *percent;
	let total=parseInt(bill)+tipAmount;
	let person=total/parseInt(people);

	results.classList.add('showItem');
	document.getElementById('tip-amount').textContent=tipAmount.toFixed(1);
	document.getElementById('total-amount').textContent=total;
	document.getElementById('person-amount').textContent=person.toFixed(2);
	
}



function clearForm(){
	amount.value='';
	users.value='';
	service.value='';
}
})();
