
function tikrinuAmziu(age) {

    if(isNaN(age)){
     prompt("Įveskite amžių", "");
   }

    if(age < 18){
      alert("Įeiti į svetainę draudžiama!");
   }

    if(age >= 18){
     alert("Į svetainę įeiti galite");
   }
}
