function todo() {
    myMove(); myFunction();
}
function todo2() {
    myMove2(); myFunction2();
}

function myMove() {
    var elem = document.getElementById("slider");
    var pos = 10;
    var id = setInterval(frame, 10);
    function frame() {
        if (pos >= 445) {
            pos = 445
            clearInterval(id);
        } else {
            pos = pos + 10;
            elem.style.right = pos + 'px';

        }
    }
}
function myMove2() {
    var elem = document.getElementById("slider");
    var pos = 0;
    var id = setInterval(frame, 10);
    function frame() {
        if (pos >= 445) {
            pos = 445
            clearInterval(id);
        } else {
            pos = pos + 10;
            elem.style.left = pos + 'px';

        }
    }
}
function myFunction() {
    document.getElementById("foo").style.visibility = "hidden";
    document.getElementById("foo2").style.visibility = "visible";
}
function myFunction2() {
    document.getElementById("foo2").style.visibility = "hidden";
    document.getElementById("foo").style.visibility = "visible";
}

