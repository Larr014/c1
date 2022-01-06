$(document).ready(function(){

    $('#btnLog').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iUser',$('#iUser').val());
        formData.append('iPass',$('#iPass').val());
        //depuracion
        //console.log($('#iRut').val());
        $.ajax({
            url: "../bd/log.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                if(respuesta=='1'){
                    alert('Coinciden las credenciales');
                    location.reload();
                }else{
                    alert('No coinciden');
                }
                
                //respuesta = JSON.parse(respuesta)[0];
                
            
            }
        });
    });
});