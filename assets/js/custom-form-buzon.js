/**
 * Envío de formularios
 *
 */

$(document).ready(function() {

    // Envío de lead
    $('form').submit(function(e) {
        var formId = $(this).attr("id");
        $("#boton-enviar", this).text("Enviando...");
        setTimeout(function(){
            $("#boton-enviar", this).prop('disabled', true);
        }, 300);
        sendLeadPrototype(this, formId);

        return false;
    });
});


/**
 * Creación de nuevo lead prototipo
 *
 */

function sendLeadPrototype(ref, id) {

    // URL de API
    url_api = "http://adpdev.com/adp/mx/seguimiento/index.php";

    // Nodo meta del body request
    meta = { "action": "create-lead-para-usuarios-cartas", "version": "5.0" };

    // Construye el dataset
    dataset = buldDataset();

    // Grabar valores en dataset del cliente
    dataset = buldDatasetSettings(dataset);

   /**
    *  C Ó D I G O   C U S T O M
    *  ------------------------------------------
    */

    // Información capturada por el lead
    dataset.nombre              = $('#nombre', ref).val();
    dataset.apellidos           = $('#apellidos', ref).val();
    dataset.email               = $('#email', ref).val();
    dataset.telefono            = $('#telefono', ref).val();
    dataset.comentarios         = $('#comentarios', ref).val();
    dataset.cp                  = "";

    // URL del formulario de conversión
    dataset.info.conversion_form = Agencia.url_landing + "index.php";

    // ID del tipo de lead de DB Prueba Manejo
    dataset.id_formatoTipo = 4;

    // Anteponer al comentario la fecha y hora sugeridas
    fecha = $("input[name=fecha]:checked", ref).val();
    hora = $("input[name=hora]:checked", ref).val();
    precomentario = '\n \nFecha sugerida: '+fecha+'. \nHora sugerida: '+hora+'. ';


    // Switch de id´s de formulario
    switch (id) {
        case "contact-nuevo":
            dataset.asunto = "Interesado en "+$('#mamoveranio', ref).text();
            break;
        case "contact-general":
            dataset.asunto = "Interesado en Contacto General";
            precomentario = "";
            break;
        case "contact-promos":
            dataset.asunto = "Interesado en Promocion " + $('#promo', ref).val();
            dataset.info.conversion_form = Agencia.url_landing  + "promociones.php";
            precomentario = "";
            break;
        case "contact-configurar":
            dataset.asunto = "Interesado en agendar Configuración";
            dataset.info.conversion_form = Agencia.url_landing  + "configura-tu-porsche.php";
            break;
        case "contact-seminuevos":
            dataset.asunto = "Interesado en "+$('#mamoveranio', ref).text();
            dataset.id_formatoTipo = 2;
            break;
        case "contact-prueba-manejo":
            dataset.asunto = "Interesado en Prueba de Manejo";
            break;
        default:
            dataset.asunto = "Interesado en Contacto General";
        break;
    }

    dataset.comentarios=dataset.comentarios+precomentario;



    // Suscribir a Newsletter
    if($("#id_newsletterEstado").is(':checked')){
        dataset.id_newsletterEstado = 1;
    }else{
        dataset.id_newsletterEstado = 0;
    }



    //--------------------------------------------

    var allreq = { "meta": meta, "dataset": dataset };
    var stringjson = JSON.stringify(allreq);
    console.log("BUZON REQUEST DEBUG:");
    console.log(stringjson);

    //  return false; // Prevenir envío, para hacer pruebas
    var error = false;
    jQuery.ajax({
        url: url_api,
        type: 'POST',
        data: stringjson,
        cache: false,
        beforeSend: function() {
            // Operaciones para hacer mientas se completa el envío
        },
        success: function(data, status, xhr) {
            console.log("BUZON RESPONSE DEBUG:");
            console.log(data);
            if (data.meta.status != "ok") {
                // Error al intentar enviar
                $("#boton-enviar", ref).val("Ocurrio un problema :(");
            } else {
                // Envío exitoso
                $("#boton-enviar", ref).val("¡Excelente!");
                window.location.href = "thankyoupage.php";
            }
        }
    });
}


function buldDatasetSettings(dataset){

    // URL del Home de la landing
    dataset.dominio = Agencia.url_landing;

    // ¿Asunto fijo? (Si el asunto es fijo, no funcionarán los replys de mail, email piping)
    dataset.asunto_fixed = false;

    // Template para transeccionales de registro de nuevo lead
    dataset.email_notify_enduser = null;
    dataset.email_notify_backoffice = null;

    // Campaign Agency
    dataset.campaign_agency = "adpunto";

    // From para envío de transaccionales
    dataset.from_mail_buzon = "seguimiento@crmautomotriz.com";
    dataset.from_address_agencia_buzon = Agencia.agencia;

    // Nombre de la agencia para mostrar en transaccionales
    dataset.agencia_nombre = Agencia.agencia;

    if (document.location.search == "?desarrollo=true") {
        // ID Agencia de DB Prueba de manejo Adpunto
        dataset.id_agencia = 1;

        // ID Cliente de DB Cartas Adpunto
        dataset.id_agencia_cartas = 15;
    } else {
        // ID Agencia de DB Prueba de manejo Adpunto
        dataset.id_agencia = Agencia.id_seg;

        // ID Cliente de DB Cartas Adpunto
        dataset.id_agencia_cartas = Agencia.id;
    }


    // ID del tipo de status inicial, para el lead, de DB Prueba Manejo
    dataset.id_statusNuevo = 1;

    return dataset;
}
