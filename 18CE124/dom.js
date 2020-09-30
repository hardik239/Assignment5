var y=document.getElementsByClassName('result');
function function1(){
    y[0].classList.add("a33");
    var x=document.getElementsByTagName('tr')
    var i;
    for(i=2;i<x.length;i++)
    {
        x[i].classList.add("a1");
    }
}
function function11(){
    var x=document.getElementsByTagName('tr')
    var i;
    for(i=2;i<x.length;i++)
    {
        x[i].classList.add("a11");
    }
}
function function2(){
    function11();
    y[0].classList.add("a33");
    var x=document.getElementById('bb');
    alert('total credits earned 23.');
    x.classList.add("a2");
}

function function3(){
    function11();
    y[0].classList.add("a3");
}

function function4(){
    var x=document.querySelectorAll('.aa');
    var i;
    for(i=0;i<x.length;i++)
    {
        x[i].classList.add("a4");
    }
}

function function5(){
    var i,x;
    function11();
    y[0].classList.add("a33");
        x=document.getElementsByTagName('th')[0].getAttribute("colspan");
        alert('colspan in table header is '+x);
}