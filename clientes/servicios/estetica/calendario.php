<?php 
include '../../../app/config.php';

?>

<?php 



//include ('../../../app/controllers_clientes/agendas/listado_de_agendas.php');

$servicio_id = $_GET['id_servicio'];
include '../../../app/controllers/servicios/datos_del_servicio.php';
?>

<?php include '../../layout/cabecera.php';?>
<?php include '../../layout/nav.php';?>
<?php include '../../../admin/layout/mensaje.php'; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {

    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: '',
        headerToolbar: {
            left: 'today,prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        locale: 'es',
        selectable: true,
        editable: true,
        allDaySlot: false,
        slotMinTime: '08:00',
        slotMaxTime: '19:00',
        events: {
            url: 'http://localhost/spa/app/controllers_clientes/agendas/listado_de_agendas_esteticista.php',
            method: 'GET',
            data: { load: true }
        },
        dateClick: function(info) {
            
            a = info.dateStr;
            const fechaComoCadena = a;
            var numeroDia = new Date(fechaComoCadena).getDay();
            var diaSemanaIndex = (numeroDia);
            var diasSemana = ['Domingo',  'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            var diaSemana = diasSemana[diaSemanaIndex];

            if (numeroDia == 0) {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Lo sentimos, no hay atencion los dias Domingos en Rullier Beauty",
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {




              $('#modalReservas').modal('show');

              $('#dia_de_la_semana').html(diasSemana[numeroDia]);
              $('#fecha_semana').html(a)


                var fecha = info.date;
                var dia = fecha.getDate();
                var mes = fecha.getMonth() + 1;
                var ano = fecha.getFullYear();
                var hora = fecha.getHours();
                var minutos = fecha.getMinutes();
                var fechaSinHora = ano + "-" + mes + "-" + dia;
                var horaSeleccionada = hora + ":" + minutos;
                var fecha2 = info.dateStr;
                var res = "";

                //alert(fecha2);
            
                var url = "http://localhost/spa/app/controllers_clientes/agendas/verificar_horario_esteticista.php" ;  
              
              $.get(url,{fecha2:fecha2},function (datos) {
                
                res = datos;
                  
                $('#respuesta_horario').html(res);
              })
            }
        }
    }).render();

    calendarGlobal = calendar;

    // Debounce form submission
    let formSubmitted = false;
    $('#btnAgregar').on('click', function(event) {
        if (formSubmitted) {
            event.preventDefault();
            return;
        }
        formSubmitted = true;
    });

    // Clear formSubmitted flag on modal close
    $('#modalEventos').on('hidden.bs.modal', function () {
        formSubmitted = false;
        $('#forma_pago').val('');
        $('#txtReferencia').val('');
        $('#txtPago').val('');
    });
});
</script>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id='calendar'></div>
        </div>
    </div>
</div>






<!-- Button trigger modal -->






<!-- Modal Reservas -->
<div class="modal fade" id="modalReservas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva tu servicio de masaje para el dia <span id="dia_de_la_semana"></span> <span id="fecha_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class ="row ">
          <div id ="respuesta_horario"></div>
          <div class="col-md-6">
            <div class ="d-grid gap-2">
              <button data-bs-dismiss="modal" id ="btn_h1" type="button" class="btn btn-primary ">08:00 am - 09:00 am</button>
              <button data-bs-dismiss="modal" id ="btn_h2"  class="btn btn-primary">09:00 am - 10:00 am</button>
              <button data-bs-dismiss="modal" id ="btn_h3"  class="btn btn-primary">10:00 am - 11:00 am</button>
              <button data-bs-dismiss="modal" id ="btn_h4"  class="btn btn-primary">11:00 am - 12:00 pm</button>
              <button data-bs-dismiss="modal" id ="btn_h5"  class="btn btn-primary">12:00 pm - 01:00 pm</button>
            </div>
          </div>
          <div class="col-md-6">
          <div class ="d-grid gap-2">
            
            <button data-bs-dismiss="modal" id ="btn_h6"  class="btn btn-primary">01:00 pm - 02:00 pm</button>
            <button data-bs-dismiss="modal" id ="btn_h7"  class="btn btn-primary">02:00 pm - 03:00 pm</button>
            <button data-bs-dismiss="modal" id ="btn_h8"  class="btn btn-primary">03:00 pm - 04:00 pm</button>
            <button data-bs-dismiss="modal" id ="btn_h9"  class="btn btn-primary">04:00 pm - 05:00 pm</button>
            <button data-bs-dismiss="modal" id ="btn_h10"  class="btn btn-primary">05:00 pm - 06:00 pm</button>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
      </div>
    </div>
  </div>
</div>









<!-- Modal Formulario -->

<div class="modal fade" id="modalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="../../../app/controllers_clientes/agendas/enviar_reservas.php" method="POST">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="tituloEvento"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div  id="descripcion"></div>
            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulo" class="form-label">Titulo</label>    
                  <input disabled value =  " <?php echo $nombre; ?>" type="text" class="form-control" id="titulo"  required>
                  <input hidden value =  " <?php echo $nombre; ?>" type="text" class="form-control" id="titulo2" name="title" required>
                
                </div>
              </div>
            </div>
            <div class= "row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha" class="form-label">Fecha</label>    
                  <input disabled type="text" id="txtFecha" class="form-control" >
                  <input hidden type="text" id="txtFecha2" class="form-control"  name="fecha" >

                </div>
                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="hora" class="form-label">Hora</label>    
                  <input disabled  type="text" class="form-control" id="txtHora" required >    
                  <input hidden   type="text" class="form-control" id="txtHora2" name="hora" required >            
              </div>

            </div>
            
            <div class= "row">
              <div class="col-md-6">

                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="precio" class="form-label">Precio</label>  
                  <input disabled value="<?php echo $precio; ?>$" type="text" class="form-control" id="txtprecio" name="precio" required>  
                </div>
              </div>
            </div>
            <div class= "row">

              <div class="col-md-6">
                <div class="form-group">
                  <label for="categoria" class="form-label">Categoría</label>    
                  <input disabled value="<?php echo $categoria; ?>" type="text" class="form-control" id="txtcategoria" name="categoria" required>
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cliente" class="form-label">Cliente</label>    
                  <input disabled value="<?php echo $nombre_usuario_sesion_cliente; ?>" type="text" class="form-control" id="txtcliente" name="cliente" required>
                
                </div>
              </div>

            </div>
            <div class= "row">
    
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion" class="form-label">Descripcion</label>    
                  <input readonly value =  "<?php echo $descripcion; ?>" class="form-control" id="txtdescripcion" name="descripcion" required></input>

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Forma de pago</label> 
                  <select required id= "forma_pago" class="form-select" aria-label="Default select example" name="forma_pago" required>
                    <option value="efectivo">Efectivo</option>
                    <option value="tarjeta">Tarjeta</option>
                    <option value="transferencia">Transferencia</option>
                    <option value="otros">Otros</option>
                  </select>   
                </div>
                
              </div>

            </div>
            <div class= "row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Nombre que realizo el pago</label>    
                  <input required type="text" class="form-control" id="txtPago" name="nombre_pago" >
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Numero de Referencia</label> 
                  <input required type="text" class="form-control" id="txtReferencia" name="referencia" >   
                </div>  
              </div>
            </div>
            
              <input type="text" value = " <?php echo $id_usuario_sesion; ?>" name="id_usuario_fk" hidden>
              <input type="text" value = " <?php echo $id_servicio; ?>" name="id_servicio_fk" hidden>
              <input type="text" value ="pendiente" name="estado" hidden>
            </div>
          <div class="modal-footer">
            <button type="submit" id="btnAgregar" class="btn btn-success" >Enviar</button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </form>
  </div>



<script>
  let btn_1 = document.getElementById("btn_h1")
  btn_1.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('08:00 - 09:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('08:00 - 09:00')

  });

  let btn_2 = document.getElementById("btn_h2")
  btn_2.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('09:00 - 10:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('09:00 - 10:00')

  }); 

  let btn_3 = document.getElementById("btn_h3")
  btn_3.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('10:00 - 11:00')
    $('#txtHora').val('10:00 - 11:00')
    $('#txtFechaCulminacion').val(a)

  });

  let btn_4 = document.getElementById("btn_h4")
  btn_4.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('11:00 - 12:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('11:00 - 12:00')

  });

  let btn_5 = document.getElementById("btn_h5")
  btn_5.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('12:00 - 13:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('12:00 - 13:00')
  });

  let btn_6 = document.getElementById("btn_h6")
  btn_6.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('13:00 - 14:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('13:00 - 14:00')

  });

  let btn_7 = document.getElementById("btn_h7")
  btn_7.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('14:00 - 15:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('14:00 - 15:00')

  });

  let btn_8 = document.getElementById("btn_h8")
  btn_8.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('15:00 - 16:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('15:00 - 16:00')

  });

  let btn_9 = document.getElementById("btn_h9")
  btn_9.addEventListener('click', function(){

    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('16:00 - 17:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('16:00 - 17:00')
  });

  let btn_10 = document.getElementById("btn_h10")
  btn_10.addEventListener('click', function(){
    $('#modalEventos').modal('show');
    $('#txtFecha').val(a)
    $('#txtHora').val('17:00 - 18:00')
    $('#txtFechaCulminacion').val(a)
    $('#txtFecha2').val(a)
    $('#txtHora2').val('17:00 - 18:00')

  });
  
</script>