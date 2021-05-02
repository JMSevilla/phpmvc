var firstname = document.getElementById('txtfname');
var lastname = document.getElementById('txtlname');
var nickname = document.getElementById('txtnname');

firstname.addEventListener('keyup', event => {
  if(event.keyCode === 13) {
    $('#onsubmit').click();
  }
})
lastname.addEventListener('keyup', event => {
  if(event.keyCode === 13) {
    $('#onsubmit').click();
  }
})

nickname.addEventListener('keyup', event => {
  if(event.keyCode === 13) {
    $('#onsubmit').click();
  }
})
