// Registration
var regfirstname = document.getElementById('regfirstname')
var reglastname = document.getElementById('reglastname')
var regemail = document.getElementById('regemail')
var regusername = document.getElementById('regusername')
var regpassword = document.getElementById('regpassword')
var regconfirm = document.getElementById('regconfirm')

// error indicator
var err1 = document.getElementById('error1')
// mvc test textfields
var firstname = document.getElementById('txtfname');
var lastname = document.getElementById('txtlname');
var nickname = document.getElementById('txtnname');

// sign in
var signusername = document.getElementById('signusername')
var signpassword = document.getElementById('signpassword')

// sign in keypress
signusername.addEventListener('keyup', event => {
  if(event.keyCode === 13) {
    $('#signbtn').click();
  }
})

signpassword.addEventListener('keyup', event => {
  if(event.keyCode === 13) {
    $('#signbtn').click();
  }
})

// test keypress
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
