window.onload = function(){ 

var Status = {};

var inputs = document.getElementsByTagName('input');

var focusHandler = function() {
    var name = this.name;
    console.log("Focus", name, Status[name]);
    if (!Status[name]) Status[name] = {
        total: 0,
        focus: Date.now()
    }
    else Status[name].focus = Date.now();
}
var blurHandler = function() {
    var name = this.name;
    if (Status[name]) {
        Status[name].total += Date.now() - Status[name].focus;
    }
}

for (var i = 0, l = inputs.length; i < l; i++) {
    inputs[i].onfocus = focusHandler;
    inputs[i].onblur = blurHandler;
}
 
};