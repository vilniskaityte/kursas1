function tikrinuAmziu(age) {

    if(isNaN(age)){
       alert("Įvedėte ne skaičių", "");
    return;
    }

    if(age < 18){
      alert("Įeiti į svetainę draudžiama!");
    }

    if(age >= 18){
      alert("Į svetainę įeiti galite");
    }
}
