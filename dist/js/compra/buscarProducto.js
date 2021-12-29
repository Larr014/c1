$(document).ready(function(){

    $('#btnBuscarProducto').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iCodigo',$('#iCodigo').val());
        
        //depuracion
        //console.log($('#iRut').val());
        $.ajax({
            url: "../../bd/compra/buscarProducto.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                //Si tengo un campo unico descomentar
                /*
                respuesta = JSON.parse(respuesta)[0];
                $('#iNombreProducto').val(respuesta['nombre']);
                $('#iIdProducto').val(respuesta['idproducto']);
                */
               
                //Que pasa si no tengo un campo unico descomentar
                /*
                respuesta = JSON.parse(respuesta)
                productos = respuesta.length;
                code = "<select id='productos'>";
                console.log(productos);
                for(let x=0;x<productos;x++){
                    console.log(respuesta[x]);
                    code+="<option id='"+respuesta[x]["idproducto"]+"'>"+respuesta[x]['nombre']+"</option>";
                }
                code+="</select>";
                $('#dProductos').html(code);
                */

                //Cierra el comentario antes de esto
            
            }
        });
    });
});