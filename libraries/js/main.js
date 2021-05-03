import http from "./http-common.js";

$('#onsubmit').click(function() {
      var obj = {
        fname: firstname.value,
        lname: lastname.value,
        nname: nickname.value,
        rTrigger: 1,
        table: 'tbregister'
      }
      validate(obj);
})

function validate(obj){
  ///validation
  if(!obj.fname || !obj.lname || !obj.nname){
    alert("Empty");
    return false;
  }
  else{
    http.step1(obj);
  }
}

$('#regbtn').click(function(){
  var obj = {
    regfname: regfirstname.value,
    reglname: reglastname.value,
    regemail: regemail.value,
    regusername: regusername.value,
    regpassword: regpassword.value,
    regconfirm: regconfirm.value,
    regTrigger: 1,
    table: 'users'
  }
  regvalidate(obj)
})
function regvalidate(obj){
  if(!obj.regfname || !obj.reglname || !obj.regemail || !obj.regusername || !obj.regpassword || !obj.regpassword || !obj.regconfirm){
    alert("empty fields")
    return false;
  }else if(obj.regpassword != obj.regconfirm){
    alert("mismatch password");
    return false;
  }
  else{
    http.lodash_register(obj)
  }
}
