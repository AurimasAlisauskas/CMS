// function suma (a, b) {
//     return a+b
// }
//
// console.log(suma(2,2));
//
// var x1 = document.getElementById();
//
// function jei5(x1) {
//     if (x1==5)  {
//         document.getElementById("ata1").innerHTML = "Penki";
//     } else {
//         document.getElementById("ata2").innerHTML = "ne penki";
//     }
// }

function gauti(a) {
    gautiAts();
    var x = document.getElementById(a).value;
    var y = parseInt(x);
    reset(a);
    return y;
}

var ats1 = '';

function gautiAts() {
    if (ats1==''){
        ats1=document.getElementById("rezultatas").innerHTML;
    }
    return ats1;
}
function rodytiAtsakyma(a) {
    var x = document.getElementById("rezultatas").innerHTML = ats1 + " " + a;

}

function reset(a) {
    document.getElementById(a).value = "";
}
function sudeti() {
    var a = gauti('A');
    var b = gauti ('B');
    rez = a+b;
    rodytiAtsakyma(rez);
}


function atimti() {
    var a = gauti('A');
    var b = gauti ('B');
    rez = a-b;
    rodytiAtsakyma(rez);
}

function dauginti() {
    var a = gauti('A');
    var b = gauti ('B');
    rez = a*b;
    rodytiAtsakyma(rez);
}

function dalinti() {
    var a = gauti('A');
    var b = gauti ('B');
    rez = a/b;
    rodytiAtsakyma(rez);
}

