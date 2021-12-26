$(document).ready(function(){

    $('#btnRegistrarCliente').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iNombre',$('#iNombre').val());
        formData.append('iApellido',$('#iApellido').val());
        $.ajax({
            url: "../../bd/cliente/registrarCliente.php",
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