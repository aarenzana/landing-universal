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
        template_id: 'listing-template',
        parent_id: '#inventario',
        ajax_params: {
            data: function(){
                return 'action=list-new-special-vehicles-agency-page&id_dealer=' + GlobalId.seminuevos + '&p=1&sort=year&order=asc';
            },
            url: 'http://adpdev.com/adp/mx/seminuevos/api.php',
            method: 'GET'
        },
        templateParse: function () {
            if (this.json.length == 0) {
                console.log(this.json.length + "No results found");
                return;
            }
            
            var data = this.json;
            var source = document.getElementById(this.template_id).innerHTML;
            var template = Handlebars.compile(source);
            setTimeout(function () {
                          
                $('#loader').fadeOut();
                $.each(data, function (key, val) {
                    var features = (val.body).split(",");
                    features = features.slice(0,5);
                    
                    var context = {
                        i: key,
                        id: val.id,
                        idx: val.idx,
                        color_e: val.color_e,
                        color_i: val.color_i,
                        engine: val.engine,
                        featured: val.featured,
                        features: safeHtml(features),
                        interior: val.galleries[1],
                        galleries_full: val.galleries_full,
                        galleries_ext: val.galleries_ext,
                        galleries_int: val.galleries_int,
                        horse_power: val.horse_power,
                        milege: val.milege,
                        make: val.nombre_marca,
                        model: val.nombre_modelo,
                        price: val.price,
                        price_sale: val.price_sale,
                        slug: val.slug,
                        status: val.status,
                        stock_id: val.stock_id,
                        thumb: val.thumb,
                        title: val.title,
                        trans_name: val.trans_name,
                        vin: val.vin,
                        year: val.year
                    };
                    var html = template(context);

                    $(Inventario.parent_id).append(html);
                    $("#inventario").fadeIn('slow');
                });
                
            }, 1600);
            
        }
    };


    var Item = {
        json: null,
        template_id: 'item-template',
        parent_id: '.itemdetails',
        ajax_params: { 
            data: function(){
                this.idx = idx;
                this.slug = slug;
                var query = 'action=get-listing-by-id&idx=' + this.idx + '&slug=' + this.slug + '&location=' + GlobalId.seminuevos;
                return query;
            },
            url: 'http://adpdev.com/adp/mx/seminuevos/api.php',
            method: 'GET'
        },
        templateData: function(){
            var featuresArray = (this.json.body).split(",");
            var data = {
                title: this.json.title,
                listing_id: this.json.lid,
                stock_id: this.json.stock_id,
                vin: this.json.vin,
                year: this.json.year,
                mileage: this.json.milege,
                torque: this.json.torque,
                thumb: this.json.thumb,
                detail_items: {
                    "VIN": this.json.vin,
                    "Puertas": this.json.doors,
                    "HP": this.json.horse_power,
                    "Transmisión": this.json.trans_name,
                    "Precio": "$" + parseInt(this.json.price).toLocaleString(),
                    "Color exterior": this.json.color_e,
                    "Color interior": safeHtml(this.json.color_i),
                    "Motor": this.json.engine,
                    "Combustible": this.json.fuel_name,
                    "Categoria": this.json.category_name
                },
                price: parseInt(this.json.price).toLocaleString(),
                price_sale: parseInt(this.json.price_sale).toLocaleString(),
                color_e: this.json.color_e,
                color_i: this.json.color_i,
                doors: this.json.doors,
                engine: this.json.engine,
                top_speed: this.json.top_speed,
                horse_power: this.json.horse_power,
                features: safeHtml(featuresArray),
                sold: this.json.featured,
                make: this.json.make_name,
                model: this.json.model_name,
                type: this.json.condition_name,
                category: this.json.category_name,
                fuel: this.json.fuel_name,
                trans: this.json.trans_name
            };
            return data;
        },
        templateParse: function () {
            if (this.json.length == 0) {
                console.log(this.json.length + "No results found");
                return;
            }

            var source = document.getElementById(this.template_id).innerHTML;
            var template = Handlebars.compile(source);

            var context = this.templateData();
            var html = template(context);
            setTimeout(function () {
                $('#loader').hide();
                $(Item.parent_id).append(html);
            }, 1600);
            
        }

    };

    function appInit(obj) {
        // console.log(obj.ajax_params.data());
        $.ajax({
                data: Agencia.ajax_params.data(),
                url: Agencia.ajax_params.url,
                method: Agencia.ajax_params.method,
                async: true,
                success: function (data) {
                    Agencia.json = data.dataset;
                    var ag_ids = JSON.parse(Agencia.json.info);
                    GlobalId.seminuevos = ag_ids.data.id_seminuevos;
                    GlobalId.cartas = ag_ids.data.id_cartas;
                    GlobalId.seguimiento = ag_ids.data.id_seguimiento;
                    console.log(GlobalId);
                    $('#loader').fadeIn('slow');
                }
            })
            .then(function (data) {
                Agencia.templateParse('header-template', '#header');
                Agencia.templateParse('footer-template', '#footer');
            
                processData(obj);
                                          
            });
    }


    function processData(obj) {
        // console.log(obj.ajax_params.data());
        $.ajax({
            data: obj.ajax_params.data(),
            url: obj.ajax_params.url,
            method: obj.ajax_params.method,
            async: true,
            success: function (data) {
                          
            }        
        })
        .then(function (data) {
            // console.log('Only get data:');
            // console.log(obj.json);
            obj.json = data.dataset;
   
            obj.templateParse();           

        });
    }


    // Utils
    function safeHtml(val) {
        if (typeof (val) === 'object') {
            array_out = [];

            $(val).each(function (i) {
                array_out.push($('<textarea />').html(val[i]).text());
            });
            return array_out;
            
        } else if (typeof (val) === 'string') {
            return ($('<textarea />').html(val).text());
        }
    }

    function doItemUrl(idx, slug) {
        var agencia = (window.location.search).slice(1);
        window.location.href = 'item.php/'+idx+'/'+slug+'?'+agencia;        
    }

    function doNavUrl(nav) {
        var agencia = (window.location.search).slice(1);
        window.location.href = '/landing-v2/' + nav + '?' + agencia;
    }



    
// }
