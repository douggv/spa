<?php include '../../app/config.php';?>    
<?php include '../../admin/layout/parte1.php';?>
<?php include '../../admin/layout/mensaje.php';?>

    <div  class="container">

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div id='calendar'></div>
            </div>
            <div class="col-md-2">
            </div>

    </div>



<script>
let NuevoEvento;
var calendarGlobal;

document.addEventListener('DOMContentLoaded', function() {
  const calendarEl = document.getElementById('calendar')
  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    
    headerToolbar: {
      left: 'today,prev,next',
      center: 'title',
      right: 'dayGridMonth'
    },
    locale : 'es',
    dateClick: function(info) {
        a = info.dateStr;
            const fechaComoCadena = a;
            var numeroDia = new Date(fechaComoCadena).getDay();
           
            var diaSemanaIndex = (numeroDia);

            var diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
            var diaSemana = diasSemana[diaSemanaIndex];
                if (numeroDia == 0) {
                    Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Lo sentimos, no hay atencion los dias Domingos",
                    showConfirmButton: false,
                    timer: 1500
                    });            
                } else {
                // Abre el modal de Bootstrap
        $('#txtFecha').val(info.dateStr);
        $('#txtFechaCulminacion').val(info.dateStr);
        //$('#modalEventos').modal('show');
      }
    },
    
    events:'http://localhost/spa/app/controllers/agendas/eventos.php',

eventClick: function(info) {
  $('#tituloEvento').html(info.event.title);

  // MOSTARR LA IMNFORMACUIN DEL EVENTO EN LOS INPUTS
  let NuevoEvento = {
    title: info.event.title,
    start: info.event.start,
    end: info.event.end,
    color: info.event.extendedProps.colorFondo,
    descripcion: info.event.extendedProps.descripcion,
    categoria: info.event.extendedProps.categoria,
    cliente: info.event.extendedProps.usuario_nombre,
    id_reserva: info.event.extendedProps.id_reserva,
    hora: info.event.extendedProps.hora_cita,
    
  };
  $('#id_reserva').val(NuevoEvento.id_reserva);
  $('#titulo').val(NuevoEvento.title);
  $('#txtdescripcion').val(NuevoEvento.descripcion);
  $('#txtcategoria').val(NuevoEvento.categoria);
  $('#txtcliente').val(NuevoEvento.cliente);
  $('#txtColor').val(NuevoEvento.color);
  $('#txtID').val(NuevoEvento.id_reserva);
  $('#txtHora').val(NuevoEvento.hora);

  // fecha y hor de inicio "start"
  var fechaInicio = new Date(info.event.start);
  var fecha = fechaInicio.getFullYear() + '-' + (fechaInicio.getMonth() + 1) + '-' + fechaInicio.getDate();
  $('#txtFecha').val(fecha);
  var horaInicio = fechaInicio.getHours() + ':' + fechaInicio.getMinutes();

  // fecha y hor de culminacion "end"
  var fechaCulminacion = new Date(info.event.end);
  var horaCulminacion = fechaCulminacion.getHours() + ':' + fechaCulminacion.getMinutes();
  $('#txtHoraCulminacion').val(horaCulminacion);

 var fechaCulminacion = new Date(info.event.end);
  var fecha = fechaCulminacion.getFullYear() + '-' + (fechaCulminacion.getMonth() + 1) + '-' + fechaCulminacion.getDate();
  $('#txtFechaCulminacion').val(fecha);
  $('#modalEventos').modal('show');
}

  })
  
  calendar.render()

  calendarGlobal = calendar;

 // BOTON AGREGAR
  let btnAgregar = document.getElementById('btnAgregar');
    btnAgregar.addEventListener('click',function(){
    console.log("Botón Agregar clicado");
    RecolectarDatosGUI();
    console.log("Evento creado", NuevoEvento);
    EnviarInformacion('agregar', NuevoEvento);
    
    });

     // BOTON ELIMINAR
  let btnBorrar = document.getElementById('btnBorrar');
    btnBorrar.addEventListener('click',function(){
    console.log("Botón Eliminar clicado");
    RecolectarDatosGUI();
    console.log("Evento creado", NuevoEvento);
    EnviarInformacion('eliminar', NuevoEvento);
    });

 //BOTON MODIFICAR
 $('#btnModificar').click(function(){
    console.log("Botón Modificar clicado");
    RecolectarDatosGUI();
    console.log("Evento creado", NuevoEvento);
    EnviarInformacion('modificar', NuevoEvento);
    });
})

function RecolectarDatosGUI() {
  NuevoEvento = {
    id_reserva: $('#txtID').val(),
    title: $('#titulo').val(),
    start: $('#txtFecha').val() + ' ' + $('#txtHora').val(),
    end: $('#txtFechaCulminacion').val() + ' ' + $('#txtHoraCulminacion').val(),
    color: $('#txtColor').val(),
    descripcion: $('#txtdescripcion').val(), 
    categoria: $('#txtcategoria').val(), 
    cliente: $('#txtcliente').val(), 
    hora: $('#txtHora').val(),

  };
  return NuevoEvento
}

function getCalendar() {
    return calendarGlobal;
}

function EnviarInformacion(accion, objetoEvento) {
  var calendar = getCalendar();
  var datos = {
    accion: accion,
    id_reserva: objetoEvento.id_reserva,
    title: objetoEvento.title,
    start: objetoEvento.start,
    end: objetoEvento.end,
    color: objetoEvento.color,
    descripcion: objetoEvento.descripcion,
    categoria: objetoEvento.categoria,
    cliente: objetoEvento.usuario_nombre,
    hora: objetoEvento.hora
  };
  console.log(datos); 
  $.ajax({
        type: 'POST',
        url: '/spa/app/controllers/agendas/eventos.php?accion=' + accion,
        data: datos,
        dataType: 'json', 

    });
    $('#modalEventos').modal('toggle'); 
    calendar.refetchEvents();
}   



</script>
    




<!-- Modal de Formulario Agregar, Modificar y Borrar -->
<div class="modal fade" id="modalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tituloEvento"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div  id="descripcion"></div>
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="txtID" class="form-label">ID</label>
              <input type="text" class="form-control" id="txtID" name="id" readonly>
            </div>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="titulo" class="form-label">Titulo</label>    
              <input type="text" class="form-control" id="titulo" name="title" required>
            </div>
          </div>
        </div>
        <div class= "row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="fecha" class="form-label">Fecha</label>    
              <input type="text" id="txtFecha" class="form-control" name="fecha" required>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="hora" class="form-label">Hora</label>    
              <input placeholder="00:00" type="text" class="form-control" id="txtHora" name="hora" required>
            </div>
          </div>

        </div>
        
        <div class= "row">

          <div class="col-md-6">
            <div class="form-group">
              <label for="categoria" class="form-label">Categoría</label>    
              <input type="text" class="form-control" id="txtcategoria" name="categoria" required>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="cliente" class="form-label">Cliente</label>    
              <input type="text" class="form-control" id="txtcliente" name="cliente" required>
            </div>
          </div>

        </div>

        
      </div>
      <div class="modal-footer">

        <button type="button" id="btnModificar" class="btn btn-secondary" >Modificar</button>
        <button type="button" id="btnBorrar" class="btn btn-danger" >Borrar</button>

        
      </div>
    </div>
  </div>
</div>
<script>
    
</script>
        
<?php include '../../admin/layout/parte2.php';?>

