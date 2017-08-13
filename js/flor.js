var datosT;
var total=0.0;
var cont=1;

$(document).ready(function() {
    dibujarTabla();


});

function agregar(id,cantidad){
     console.log(cantidad);
    $.ajax({
        data:{"ID_RAMO":id,},
        dataType: 'json',
        url:   'obtenerFlor',
        type:  'post',
            success:  function (data) {
             datosT=data;
             console.log("bien");
            createRow(cantidad);
            var im='<strong><p id="totalP">$ '+total+' </p></strong>';
            $('#totalP').html(im);

         }
     });

}

function dibujarTabla(){
    var str='<table class="table  table-bordered table-responsive">';
    str+='<thead class="active"> <tr> <th>N</th> <th>NOMBRE</th> <th>CANTIDAD</th> <th>PRECIO</th><th>SUBTOTAL</th><th>ACCIONES</th> </tr> </thead>';
    str+='<tbody >';
    str+='</tbody></table>';
    $("#tablaCar").html(str);

}

function createRow(cant) {
    var sub=0.0;
  for (var i = 0; i < datosT.length; i++) {
    sub=datosT[i].precio*cant;
    var row='<tr id="'+cont+'">' +
      '<td>'+cont+'</td>' +
      '<td>'+datosT[i].nombre+'</td>' +
      '<td>'+cant+'</td>' +
      '<td>'+datosT[i].precio+'</td>' +
      '<td>'+sub+'</td>' +
      '<td><button id="fin" type="button" class="btn btn-info btn-sm icon-acciones" onclick="eliminarFila('+cont+','+sub+')"> ELIMINAR </button></td>' +
    '</tr>'

  }
    total+=sub;
   $('#tablaCar tr:last').after(row);

  cont+=1;

}

function eliminarFila(i,sub){
  console.log(sub);
  $("#"+i).remove();
  total=total-sub;
  var im='<strong><p id="totalP">$ '+total+' </p></strong>';
            $('#totalP').html(im);
}

function crear(){
  console.log(total);
    $.ajax({
        data:{"totalesP":total},
        url:   'guardarPer',
        type:  'post',
            success:  function (response) {
             console.log("biennn");
         }
     });
}





