$(document).ready(function(){

    $('#btnModificarCliente').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iId',$('#iId').val());
        formData.append('iNombre',$('#iNombre').val());
        formData.append('iApellido',$('#iApellido').val());
        $.ajax({
            url: "../../bd/cliente/modificarCliente.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                alert(respuesta);
                
            }
        });
    });
});