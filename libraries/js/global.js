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
