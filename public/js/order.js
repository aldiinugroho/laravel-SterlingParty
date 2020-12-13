var portofolio = 'https://aldiinugroho.github.io/portofolio/';

console.log("%cAldi Nugroho", "color: Black; font-size: x-large; font-family:sans-serif");
console.log("%cCheck my portofolio "+portofolio, "color: Black; font-size: x-large; font-family:sans-serif");

function register() {

    var vnama = document.getElementById('name');
    var vcontact = document.getElementById('contact');
    var vaddress = document.getElementById('address');
    var vdate = document.getElementById('date');
    var vtheme = document.getElementById('theme');
    var vadditional = document.getElementById('additional');
    var verror = document.getElementById('errors');

    // name validation

    if(vnama.value == 0){
        verror.innerText = "'Name cannot be empty'";
        return false;
    }

    if(vnama.value.includes(",") || vnama.value.includes(".") || vnama.value.includes("/")
    || vnama.value.includes("<") || vnama.value.includes(">") || vnama.value.includes("?")
    || vnama.value.includes(";") || vnama.value.includes("'") || vnama.value.includes(":")
    || vnama.value.includes("\"") || vnama.value.includes("[") || vnama.value.includes("]")
    || vnama.value.includes("\\") || vnama.value.includes("{") || vnama.value.includes("}")
    || vnama.value.includes("|") || vnama.value.includes("=") || vnama.value.includes("-")
    || vnama.value.includes("+") || vnama.value.includes("_") || vnama.value.includes(")")
    || vnama.value.includes("(") || vnama.value.includes("*") || vnama.value.includes("&")
    || vnama.value.includes("^") || vnama.value.includes("%") || vnama.value.includes("$")
    || vnama.value.includes("#") || vnama.value.includes("@") || vnama.value.includes("!")
    || vnama.value.includes("`") || vnama.value.includes("~")){
        verror.innerText = "'Name cannot contain symbols'";
        return false;
    }

    if(vnama.value.includes("1") || vnama.value.includes("2") || vnama.value.includes("3")
    || vnama.value.includes("4") || vnama.value.includes("5") || vnama.value.includes("6")
    || vnama.value.includes("7") || vnama.value.includes("8") || vnama.value.includes("9")){
        verror.innerText = "'Name cannot be numeric'";
        return false;
    }

    // contact validation
    var charac = /^[A-Za-z]+$/;

    if(vcontact.value === "") {
        verror.innerText = "'Contact cannot be empty'";
        return false;
    }

    if(vcontact.value.match(charac)){
        verror.innerText = "'Contact cannot be characters'";
        return false;
    }

    if(vcontact.value > 999999999999 || vcontact.value < 99999999) {
        verror.innerText = "'contact length is less or more'";
        return false;
    }

    // address validation
    if(vaddress.value === "") {
        verror.innerText = "'Address cannot be empty'";
        return false;
    }

    // theme validation
    if(vtheme.value.includes("null")) {
        verror.innerText = "'Select your theme'";
        return false;
    }

    if(document.getElementById("acc").checked == false){
        verror.innerText = "'Please agree to terms and conditions'";
        return false;
    }
    
    return true;
}
