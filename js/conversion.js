/*eslint-env browser*/

//length

document.getElementById("m_to_f").onclick = function () {
    var m = document.getElementById("from_meter").value;
    //validity check
    if (isNaN(m))
        alert ("Please enter a number");      
};

document.getElementById("f_to_m").onclick = function () {
    var f = document.getElementById("from_feet").value;
    //validity check
    if (isNaN(f))
        alert ("Please enter a number");
};


//speed

document.getElementById("k_to_miles").onclick = function () {
    var k = document.getElementById("from_k").value;
    //validity check
    if (isNaN(k))
        alert ("Please enter a number");

};

document.getElementById("miles_to_k").onclick = function () {
    var miles = document.getElementById("from_miles").value;
    //validity check
    if (isNaN(miles))
        alert ("Please enter a number");
};


//force

document.getElementById("n_to_lbf").onclick = function () {
    var n = document.getElementById("from_n").value;
    //validity check
    if (isNaN(n))
        alert ("Please enter a number");
};

document.getElementById("lbf_to_n").onclick = function () {
    var lbf = document.getElementById("from_lbf").value;
    //validity check
    if (isNaN(lbf))
        alert ("Please enter a number");
};