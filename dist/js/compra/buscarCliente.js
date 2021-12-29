$(document).ready(function(){

    $('#btnBuscarCliente').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iRut',$('#iRut').val());
        
        //depuracion
        //console.log($('#iRut').val());
        $.ajax({
            url: "../../bd/compra/buscarCliente.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                respuesta = JSON.parse(respuesta)[0];
                console.log(respuesta);
                $('#iNombreCliente').val(respuesta['nombre']+' '+respuesta['apellido']);
                $('#iIdCliente').val(respuesta['idCliente']);
            
            }
        });
    });
});