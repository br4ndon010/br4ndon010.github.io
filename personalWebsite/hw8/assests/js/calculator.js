// JavaScript Document
var num1=document.getElementById('firstNum');
var num2=document.getElementById('secondNum');
var output=document.getElementById('output');
var sign=document.getElementById('mySelect')

document.getElementById("mybtn").addEventListener("click", result);

//function calculate(){
//	output.innerHTML='<h3>'+ sign.value;
//}

function result(){
	switch(sign.value){
		case "add":
			add();
			break;
		case "sub":
			sub();
			break;
		case "mul":
			mul();
			break;
		case "div":
			div();
			break;
		default:
			output.innerHTML='<h3>'+ sign.value
	}
//	output.innerHTML='<h3>'+ sign.value;
}

//function result(){
//	var answer=parseInt(num1.value) + parseInt(num2.value);
//	output.innerHTML='<h3>Your result is : '+text+'</h3>';
//}
function add(){
	var answer=parseInt(num1.value)+parseInt(num2.value);
	output.innerHTML='<h3>Your result is : '+answer+'</h3>';
}
function sub(){
	var answer=num1.value-num2.value;
	output.innerHTML='<h3>Your result is : '+answer+'</h3>';
}
function mul(){
	var answer=num1.value*num2.value;
	output.innerHTML='<h3>Your result is : '+answer+'</h3>';
}
function div(){
	var answer=num1.value/num2.value;
	output.innerHTML='<h3>Your result is : '+answer+'</h3>';
}