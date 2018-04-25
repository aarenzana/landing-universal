// function AppInit(){

    var GlobalId = {};


    var Agencia = {
        json: null,
        ajax_params: {
            data: function () {
                var query = 'agencia=' + (window.location.search).slice(1);
                return query;
            },
            url: 'http://adpdev.com/landing-v2/app/agenciavars.php',
            method: 'POST'
        },
        templateData: function(){
            var data = {
                agencia       : this.json.agencia,
                dir_serv_l1   : this.json.dir_servicio_linea1,
                dir_serv_l2   : this.json.dir_servicio_linea2,
                dir_serv_l3   : this.json.dir_servicio_linea3,
                dir_serv_l4   : this.json.dir_servicio_linea4,
                dir_l1        : this.json.direccion_linea1,
                dir_l2        : this.json.direccion_linea2,
                dir_l3        : this.json.direccion_linea3,
                dir_l4        : this.json.direccion_linea4,
                facebook      : this.json.facebook,
                instagram     : this.json.instagram,
                twitter       : this.json.twitter,
                youtube       : this.json.youtube,
                web           : this.json.web,
                logo          : this.json.logo,
                logo_alt      : this.json.logo_alt,
                map_dir_1     : this.json.map_direccion_1,
                map_dir_2     : this.json.map_direccion_2,
                telefono      : this.json.telefono,
                telefono_serv : this.json.telefono_servicio,
                telefono_track: this.json.telefono_tracking
            };
            return data;
        },
        templateParse: function(template_id, parent_id){
            if (this.json.length == 0) {
                console.log(this.json.length + "No results found");
                return;
            }

            var source = document.getElementById(template_id).innerHTML;
            var template = Handlebars.compile(source);

            var context = this.templateData();
            var html = template(context);

            $(parent_id).append(html);
        }
    };


    var Inventario = {
        json: null,
        ajax_params: {
            data: function(){
                return 'action=list-new-special-vehicles-agency-page&id_dealer=' + GlobalId.seminuevos + '&p=1&sort=year&order=asc';
            },
            url: 'http://adpdev.com/adp/mx/seminuevos/api.php',
            method: 'GET'
        },
        templateParse: function (template_id, parent_id) {
            if (this.json.length == 0) {
                console.log(this.json.length + "No results found");
                return;
            }
            var data = this.json;   
            $.each(data, function (key, val) {
                var source = document.getElementById(template_id).innerHTML;
                var template = Handlebars.compile(source);
                var context = {
                    id: val.id,
                    color_e: val.color_e,
                    color_i: val.color_i,
                };
                var html = template(context);

                $(parent_id).append(html);
            });
            
        }
    };


    // var Item = {
    //     json: null,
    //     ajax_params: { 
    //         data: function(){
    //             this.idx = idx;
    //             this.slug = slug;
    //             return 'action=get-listing-by-id&idx=' + this.idx + '&slug=' + this.slug + '&location=' + GlobalId.seminuevos;
    //         },
    //         url: 'http://adpdev.com/adp/mx/seminuevos/api.php',
    //         method: 'GET'
    //     },
    //     template_context: {
    //         title: item.title,
    //         listing_id: item.lid,
    //         stock_id: item.stock_id,
    //         vin: item.vin,
    //         year: item.year,
    //         mileage: item.milege,
    //         torque: item.torque,
    //         thumb: item.thumb,
    //         detail_items: {
    //             "VIN": item.vin,
    //             "Puertas": item.doors,
    //             "HP": item.horse_power,
    //             "Transmisión": item.trans_name,
    //             "Precio": "$" + parseInt(item.price).toLocaleString(),
    //             "Color exterior": item.color_e,
    //             "Color interior": item.color_i,
    //             "Motor": item.engine,
    //             "Combustible": item.fuel_name,
    //             "Categoria": item.category_name
    //         },
    //         price: parseInt(item.price).toLocaleString(),
    //         price_sale: parseInt(item.price_sale).toLocaleString(),
    //         color_e: item.color_e,
    //         color_i: item.color_i,
    //         doors: item.doors,
    //         engine: item.engine,
    //         top_speed: item.top_speed,
    //         horse_power: item.horse_power,
    //         features: safehtmlArray(featuresArray),
    //         sold: item.featured,
    //         make: item.make_name,
    //         model: item.model_name,
    //         type: item.condition_name,
    //         category: item.category_name,
    //         fuel: item.fuel_name,
    //         trans: item.trans_name
    //     },
    //     parseTemplate: function(data){
    //         if (data.length == 0) {
    //             console.log("No results found");
    //             return;
    //         }

    //         var item = data.dataset;
    //         var source = document.getElementById("item-template").innerHTML;
    //         var template = Handlebars.compile(source);

    //         featuresArray = (item.body).split(",");

    //         var context = this.template_context;
    //         var html = template(context);

    //         // console.log(html);
    //         $(".itemdetails").append(html);

    //     }
    // };


    function processData(obj, parse, template) {
        // console.log(obj.ajax_params.data());
        $.ajax({
            data: obj.ajax_params.data(),
            url: obj.ajax_params.url,
            method: obj.ajax_params.method,
            async: false,
            success: function (data) {
                obj.json = data.dataset;
            }        
        })
        .done(function (data) {
            if(parse){
                // console.log('Parsing template');
                // obj.parseTemplate(data);
            }else{
                console.log('Only get data:');
                console.log(obj.json);
            }
        });
    }


    function getAppData(type){        
        processData(Agencia);
        var ag_ids = JSON.parse(Agencia.json.info);
        GlobalId.seminuevos  = ag_ids.data.id_seminuevos;
        GlobalId.cartas      = ag_ids.data.id_cartas;
        GlobalId.seguimiento = ag_ids.data.id_seguimiento;

        switch (type) {
            case 'inventario':
                processData(Inventario);
                break;
            case 'item':
                processData(Item);
                break;
        }
    }


    $(document).ready(function(){
        getAppData('inventario');
        Agencia.templateParse('footer-template', '#footer');
        Agencia.templateParse('header-template', '#header');
        Inventario.templateParse('listing-template', '#inventario');
    });
// }
