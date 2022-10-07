
$(document).ready(function(){
    
    listar_g()
   function listar_g() {
    $('.galery_content').html("")
        $.ajax({
            type: "GET",
            url: "http://localhost/PROGRAMADOR/MY_PORTAFOLIO/php/consulta.php",
            data: "data",
            dataType: "JSON",
            success: function (data) {
                $.each(data, function (I, Recorredor) { 
                    $(".card_content").html($(".card_content").html()+`
                    <div class="card">
                    <img src="IMG/${Recorredor.imagen}" alt="">
                        <div class="nombre"><h4>${Recorredor.titulo}</h4></div>
                        <div class="desc">
                            <p>${Recorredor.descripcion}</p>
                        </div>
                        <div class="enlace">
                            <a href="${Recorredor.enlace}" target="_blank" rel="noopener noreferrer" class="btn">VIEW_PROJECT</a>
                        </div>
                    </div>
                    `)

                    $('.galery_content').html($('.galery_content').html()+`
                    <div class="card">
                        <img src="IMG/${Recorredor.imagen}" alt="">
                        <div class="title"><h3>${Recorredor.titulo}</h3></div>
                        <div class="description">
                            <p>${Recorredor.descripcion}</p>
                        </div>
                        <div class="opcion">
                        <button class="delete" data-id="${Recorredor.id}">ELIMINAR</button>
                        </div>

                    </div>
                    `)
                    
                    
                });

                
                
            }

            
        });

        

    }

    $(document).on('click', '.delete', function(){
        
        Swal.fire({
            title: '¿Estas seguro que quieres eliminar el proyecto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
          }).then((result) => {
            if (result.isConfirmed) {
                let ladata = $(this).data("id")

                $.post("http://localhost/PROGRAMADOR/MY_PORTAFOLIO/PHP/consulta.php", {"accion2":"delete_",ladata},
                    function (data, text, requestXHR) {
                        Swal.fire(
                            'Eliminado!',
                            'El proyecto ha sido eliminado satisfactoriamente.',
                            'success'
                          )
                          listar_g()
                    });
              
            }
          })
    })

    $('form').submit(function(e){
        e.preventDefault();
        let datosform = new FormData(this);
        $('#pt').val("");
        $('#img').val("");
        $('#desc').val("");
        $('#lp').val("");

        $.ajax({
            type: "POST",
            contentType: false,
            cache: false,
            processData: false,
            enctype:"multipart/form-data",
            url: "http://localhost/PROGRAMADOR/MY_PORTAFOLIO/PHP/consulta.php",
            data: datosform,
            success: function (data) {
                console.log(data)
                listar_g()
            }
        });
        
    })

    
})