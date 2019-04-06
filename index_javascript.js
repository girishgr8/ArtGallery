/*function openForm() {
  document.getElementById("myform").style.display = "block";
}

function closeForm() {
  document.getElementById("myform").style.display = "none";
}*/


var modal = document.getElementById('myform');
var modalBtn = document.getElementById('modalBtn');
var closeBtn = document.getElementById('closeBtn');

modalBtn.addEventListener('click', openForm);
closeBtn.addEventListener('click', closeModal);

/*function openModal(){
	document.getElementById('simpleModal').style.display = 'block';
}*/

function openForm() {
  document.getElementById("simpleModal").style.display = "block";
}

function closeForm() {
  document.getElementById("simpleModal").style.display = "none";
}

//window.addEventListener('click', clickOutside);

/*function clickOutside(event){
	if(event.target == modal){
		modal.style.display = "none";
	}
}
*/
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

