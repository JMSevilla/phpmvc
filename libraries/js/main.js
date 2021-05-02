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
