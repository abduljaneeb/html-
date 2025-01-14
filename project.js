const body=document.querySelector('body');
const button=document.querySelector('button');
const colors=['green','yellow'];

body.style.backgroundColor = 'blue';

button.addEventListener('click',function(){
	const colorsIndex=parseInt(Math.random() * colors.length);
	body.style.backgroundColor=colors[colorsIndex];
});
