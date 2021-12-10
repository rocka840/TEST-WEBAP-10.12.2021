$(start);

function start(){
    $("#Login").on("click", show);
}

function show(){
    
    $("#AmountInAccount").load("bank.php?moneyHave="+$("#User").val());


    In = $("<input>");
    In.attr("id", "InputId");
    $("#NextActions").append(In);

    Depbtn = $("<button>Deposit amount</button>");
    Depbtn.attr("id", "DepositId");
    $("#NextActions").append(Depbtn);
    Depbtn.on("click", Deposit);

    Drawbtn = $("<button>Widthdraw amount</button>");
    Drawbtn.attr("id", "DrawbtnId");
    $("#NextActions").append(Drawbtn);
    Drawbtn.on("click", Widthdraw);
}

function Deposit(){
    $("#ResultOperating").load("bank.php?Deposit="+$("#User").val()+"&amount="+$(""))
}

function Widthdraw(){
    $("#ResultOperating").load("bank.php?Widthdraw="+$("#User").val()+"&amount="+$())
}