const nume = document.getElementById("nume") ;
const brand = document.getElementById("brand") ;
const categorie = document.getElementById("categorie");
const latime = document.getElementById("latime");
const lungime = document.getElementById("lungime");
const culoare = document.getElementById("culoare");
const pret = document.getElementById("pret");
const submit = document.getElementById("submit");
function checkButton(){
    if ( numeOk && brandOk && categorieOk && culoareOk && latimeOk && lungimeOk && pretOk){
        btn.disabled = true;
    } 
}

let numeOk=false;
nume.addEventListener("keyup", () => {
     nume.classList.add("border");
if(nume.value.length >= 4 && nume.value.length <=40){  categorie
    numeOk = true;
    if(nume.classList.contains("border-danger")) {
        nume.classList.remove("border-danger");
    }
    nume.classList.add("border-success");

} else {
    numeOk = false;
    if(nume.classList.contains("border-success")){
        nume.classList.remove("border-success");
    }
    nume.classList.add("border-danger")
}
if(nume.value.length === 0)  {
    nume.classList.remove("border-danger");
    nume.classList.remove("border-success");
}
checkButton()
})




let brandOk=false;
brand.addEventListener("keyup", () => {
     brand.classList.add("border");
if(brand.value.length >= 2 && brand.value.length <=30){  categorie
    brandOk = true;
    if(brand.classList.contains("border-danger")) {
        brand.classList.remove("border-danger");
    }
    brand.classList.add("border-success");

} else {
    brandOk = false;
    if(brand.classList.contains("border-success")){
        brand.classList.remove("border-success");
    }
    brand.classList.add("border-danger")
}
if(brand.value.length === 0)  {
    brand.classList.remove("border-danger");
    brand.classList.remove("border-success");
}
checkButton()
})


let categorieOk=false;
categorie.addEventListener("keyup", () => {
     categorie.classList.add("border");
if(categorie.value.length >= 2 && categorie.value.length <=30){  
    categorieOk = true;
    if(categorie.classList.contains("border-danger")) {
        categorie.classList.remove("border-danger");
    }
    categorie.classList.add("border-success");

} else {
    categorieOk = false;
    if(categorie.classList.contains("border-success")){
        categorie.classList.remove("border-success");
    }
    categorie.classList.add("border-danger")
}
if(categorie.value.length === 0)  {
    categorie.classList.remove("border-danger");
    categorie.classList.remove("border-success");
}
checkButton()
})



let culoareOk=false;
culoare.addEventListener("keyup", () => {
     culoare.classList.add("border");
if(culoare.value.length >= 2 && culoare.value.length <=30){  
    culoareOk = true;
    if(culoare.classList.contains("border-danger")) {
        culoare.classList.remove("border-danger");
    }
    culoare.classList.add("border-success");

} else {
    culoareOk = false;
    if(culoare.classList.contains("border-success")){
        culoare.classList.remove("border-success");
    }
    culoare.classList.add("border-danger")
}
if(culoare.value.length === 0)  {
    culoare.classList.remove("border-danger");
    culoare.classList.remove("border-success");
}
checkButton()
})

let latimeOk=false;
latime.addEventListener("keyup", () => {
     latime.classList.add("border");
if(latime.value >= 50 && latime.value <=5000){  
    latimeOk = true;
    if(latime.classList.contains("border-danger")) {
        latime.classList.remove("border-danger");
    }
    latime.classList.add("border-success");

} else {
    latimeOk = false;
    if(latime.classList.contains("border-success")){
        latime.classList.remove("border-success");
    }
    latime.classList.add("border-danger")
}
if(latime.value.length === 0)  {
    latime.classList.remove("border-danger");
    latime.classList.remove("border-success");
}
checkButton()
})


let lungimeOk=false;
lungime.addEventListener("keyup", () => {
     lungime.classList.add("border");
if(lungime.value >= 50 && lungime.value <=5000){  
    lungimeOk = true;
    if(lungime.classList.contains("border-danger")) {
        lungime.classList.remove("border-danger");
    }
    lungime.classList.add("border-success");

} else {
    lungimeOk = false;
    if(lungime.classList.contains("border-success")){
        lungime.classList.remove("border-success");
    }
    lungime.classList.add("border-danger")
}
if(lungime.value.length === 0)  {
    lungime.classList.remove("border-danger");
    lungime.classList.remove("border-success");
}
checkButton()
})


let pretOk=false;
pret.addEventListener("keyup", () => {
     pret.classList.add("border");
if(pret.value >= 500 && latime.value <=500000){  
    pretOk = true;
    if(pret.classList.contains("border-danger")) {
        pret.classList.remove("border-danger");
    }
    pret.classList.add("border-success");

} else {
    pretOk = false;
    if(pret.classList.contains("border-success")){
        pret.classList.remove("border-success");
    }
    pret.classList.add("border-danger")
}
if(pret.value.length === 0)  {
    pret.classList.remove("border-danger");
    pret.classList.remove("border-success");
}
checkButton()
})
