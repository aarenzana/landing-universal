
var Id = {
    cartas: 28,
    seminuevos: 36,
    seguimiento: 45
};

var Inventario = {
    json: null,
    ajax: {
        data: function(){
            return 'action=list-new-special-vehicles-agency-page&id_dealer=' + Id.seminuevos + '&p=1&sort=year&order=asc';
        },
        url: 'http://adpdev.com/adp/mx/seminuevos/api.php',
        method: 'GET'
    }
};


var Agencia = {
    json: null,
    ajax: {
        data: function(){
            return 'id_cartas=' + Id.cartas;
        },
        url: 'http://adpdev.com/landing-v2/app/agenciavars.php',
        method: 'POST'
    }
};


/**
 * Represents the Single Item View
 * @namespace
 * @property {object}  json       - Defaults to Null until set by ajax call
 * @property {object}  ajax       - Holds the Ajax parameters
 * @property {method}  ajax.data  - Returns the data request string
 * @property {string}  ajax.data.idx  - The idx number for Item
 * @property {string}  ajax.data.slug - The slug for the Item
 * @property {string}  ajax.url    - URL for the data source (API)
 * @property {string}  ajax.method - The HTTP request header method
 */
var Item = {
    json: null,
    ajax: { 
        data: function(){
            this.idx = idx;
            this.slug = slug;
            return 'action=get-listing-by-id&idx=' + this.idx + '&slug=' + this.slug + '&location=' + Id.seminuevos;
        },
        url: 'http://adpdev.com/adp/mx/seminuevos/api.php',
        method: 'GET'
    },
    parseTemplate: function(data){
        if (data.length == 0) {
            console.log("No results found");
            return;
        }

        var item = data.dataset;
        var source = document.getElementById("item-template").innerHTML;
        var template = Handlebars.compile(source);

        featuresArray = (item.body).split(",");


        var context = {
            title: item.title,
            listing_id: item.lid,
            stock_id: item.stock_id,
            vin: item.vin,
            year: item.year,
            mileage: item.milege,
            torque: item.torque,
            thumb: item.thumb,
            detail_items: {
                "VIN": item.vin,
                "Puertas": item.doors,
                "HP": item.horse_power,
                "Transmisión": item.trans_name,
                "Precio": "$" + parseInt(item.price).toLocaleString(),
                "Color exterior": item.color_e,
                "Color interior": item.color_i,
                "Motor": item.engine,
                "Combustible": item.fuel_name,
                "Categoria": item.category_name
            },
            price: parseInt(item.price).toLocaleString(),
            price_sale: parseInt(item.price_sale).toLocaleString(),
            color_e: item.color_e,
            color_i: item.color_i,
            doors: item.doors,
            engine: item.engine,
            top_speed: item.top_speed,
            horse_power: item.horse_power,
            features: safehtmlArray(featuresArray),
            sold: item.featured,
            make: item.make_name,
            model: item.model_name,
            type: item.condition_name,
            category: item.category_name,
            fuel: item.fuel_name,
            trans: item.trans_name
        };

        var keys = Object.keys(context);
        console.log(keys);

        var html = template(context);

        // console.log(html);
        $(".itemdetails").append(html);

    }
};


function processData(obj, parse) {
    console.log(obj.ajax.data());
    $.ajax({
        data: obj.ajax.data(),
        url: obj.ajax.url,
        method: obj.ajax.method,
        async: false,
        success: function (data) {
            obj.json = data.dataset;
        }        
    })
    .done(function (data) {
        if(parse){
            console.log('Parsing template');
            obj.parseTemplate(data);
        }else{
            console.log('Only get data:');
            console.log(obj.json);
        }
    });
    
}





    // $.ajax({
    //         data: 'id_cartas=22',
    //         url: 'http://apdev.com/landing-v2app/agenciavars.php',
    //         method: 'POST',
    //         success: function(data) {
    //             return data.dataset;
    //         }
    // });
