$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//Materia
function deleteMateria(id){
    if(confirm('¿Estas seguro de eliminar?')){
        $.ajax({
            url:"materia/"+id,
            type:"DELETE",
            data:{id:id},
            success:function (data){



            },complete: function(data) {
                window.location.reload();
            }
        });
    }else{
        alert('Cancelacion Exitosa')
    }
}

function updateMateria(id){
    $.ajax({
        url:"materia/"+id,
        type:"GET",
        data:{id:id},
        success:function (data){
            $("#modal_crearMateria").modal("show")
            $("#codigo_materia").val(data.codigo_materia)
            $("#descripcion").val(data.descripcion)
            $("#id").val(data.id)
            $("#titulo").text("Editar Materia")

        }
    });
}
//Matricula_Materia
function deleteMatricula_materia(id){
    if(confirm('¿Estas seguro de eliminar?')){
        $.ajax({
            url:"matricula_materia/"+id,
            type:"DELETE",
            data:{id:id},
            success:function (data){



            },complete: function(data) {
                window.location.reload();
            }
        });
    }else{
        alert('Cancelacion Exitosa')
    }
}

function updateMatricula_materia(id){
    $.ajax({
        url:"matricula_materia/"+id,
        type:"GET",
        data:{id:id},
        success:function (data){
            $("#modal_crearMatricula_materia").modal("show")
            $("#users_id").val(data.users_id)
            $("#periodos_academicos_id").val(data.periodos_academicos_id)
            $("#materias_id").val(data.materias_id)
            $("#id").val(data.id)
            $("#titulo").text("Editar Matricula Materia")

        }
    });
}
//Periodos_Academicos
function deletePeriodos_academico(id){
    if(confirm('¿Estas seguro de eliminar?')){
        $.ajax({
            url:"periodos_academico/"+id,
            type:"DELETE",
            data:{id:id},
            success:function (data){



            },complete: function(data) {
                window.location.reload();
            }
        });
    }else{
        alert('Cancelacion Exitosa')
    }
}

function updatePeriodos_academico(id){
    $.ajax({
        url:"periodos_academico/"+id,
        type:"GET",
        data:{id:id},
        success:function (data){
            $("#modal_crearPeriodos_academico").modal("show")
            $("#codigo").val(data.codigo)
            $("#descripcion").val(data.descripcion)
            $("#id").val(data.id)
            $("#titulo").text("Editar Periodo Academico")

        }
    });
}
//DATOS_Basicos
function deleteUser(id){
    if(confirm('¿Estas seguro de eliminar?')){
        $.ajax({
            url:"user/"+id,
            type:"DELETE",
            data:{id:id},
            success:function (data){



            },complete: function(data) {
                window.location.reload();
            }
        });
    }else{
        alert('Cancelacion Exitosa')
    }
}

function updateUser(id){
    $.ajax({
        url:"user/"+id,
        type:"GET",
        data:{id:id},
        success:function (data){
            $("#modal_crearUser").modal("show")
            $("#cedula").val(data.cedula)
            $("#codigo_estudiante").val(data.codigo_estudiante)
            $("#nombre1").val(data.nombre1)
            $("#nombre2").val(data.nombre2)
            $("#apellido1").val(data.apellido1)
            $("#apellido2").val(data.apellido2)
            $("#telefono").val(data.telefono)
            $("#email").val(data.email)
            $("#genero").val(data.genero)
            $("#nacionalidad").val(data.nacionalidad)
            $("#fecha_nacimiento").val(data.fecha_nacimiento)
            $("#id").val(data.id)
            $("#titulo").text("Editar Datos del Producto")

        }
    });
}
