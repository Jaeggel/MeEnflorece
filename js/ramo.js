var subtotal=0;
var total=0;
var canti=0;
$(document).ready(function() {


});

function incrementar(precio,cant){
    console.log(canti);
    console.log(precio);

    subtotal+=precio;
    $("#subtotal").html(subtotal);
    total=subtotal+2.50;
    $("#total").html(total);
    canti+=1;



}

function disminuir(precio,cant){
    console.log(canti);
    console.log(precio);

        subtotal=subtotal-precio;
        $("#subtotal").html(subtotal);
        total=subtotal+2.50;

        $("#total").html(total);
        canti=canti-1;



}

function confirma(){
    $.ajax({
        data:{"totales":total,"cantidadP":canti},
        url:   'guardar',
        type:  'post',
            success:  function (response) {
             var men='<div class="alert alert-success">PEDIDO EXITOSO</div>';
             $("#mensaje").html(men);
             console.log("ok");
             //alert("TRANSACCION EXITOSA");
         }
     });

}
/////////////////////////////////////////////////////////////////////////////METRICA HELP
function clickCounter() 
    {
        var contMet;
        if(typeof(Storage) !== "undefined") {
            if (sessionStorage.clickcount) {
                sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
            } else {
                sessionStorage.clickcount = 1;
            }
            console.log("You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.");
        } else {
            console.log("Sorry, your browser does not support web storage...");
        }
    }
    function sendHelpCont()
    {
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();

        var output = d.getFullYear() + '/' +
            ((''+month).length<2 ? '0' : '') + month + '/' +
            ((''+day).length<2 ? '0' : '') + day;
        var cont=sessionStorage.clickcount;
        sessionStorage.clear();
        $.ajax({
            url: "http://localhost/MeEnflorece/index.php/Flores/setHelpCont",
            data: {"cont":cont,"fecha":output},
            dataType: "json",
            type: "POST",
            success: function(data){
                
            }
        });
    }



