
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
});

$('.property_type').change(function () {
    var propertytype = $('.property_type').val();
    //onlineMakaan.getLsData('form-step-1');
    $('.pre_property_listingtypes').find('option').remove();
    $.ajax({
        url: '/fetchListingProperty/' + propertytype,
        success: function (result) {
            $.each(result, function (index, value) {
                $('.pre_property_listingtypes').append(`<option value="${value.id}">${value.name}</option>`)
            });
        }
    });

});




$('#states').change(function () {
    var state_id = $(this).val();
    $('#cities').find('option').remove();
    $.ajax({
        url: '/fetchListingCities/' + state_id,
        success: function (result) {
            //  console.log(result);
            //  return false;
            $.each(result, function (index, value) {
                $('#cities').append(`<option value="${value.id}">${value.district}</option>`)
            });
        }
    });
});

$('#startpostbtn').click(function () {
    var property_type = $('.property_type').val();
    var pre_property_listingtypes = $('.pre_property_listingtypes').val();
    var form_step_1 = { 'property_type': property_type, 'pre_property_listingtypes': pre_property_listingtypes };
    localStorage.setItem('form-step-1', JSON.stringify(form_step_1));

    $('#form-step-2').show();
    $('#form-step-1').hide();
});

$('#previous_first').click(function () {
    $('#form-step-2').hide();
    $('#form-step-1').show();
});

$('#next_two').click(function () {
    var states = $("#states").val();
    var cities = $("#cities").val();
    var locality = $("#locality").val();
    var street = $("#street").val();
    var colonyname = $("#colonyname").val();
    var hideaddress = $("#hideaddress").val();

    var form_step_two = { 'states': states, 'cities': cities, 'locality': locality, 'street': street, 'colonyname': colonyname, 'hideaddress': hideaddress };
    localStorage.setItem('form_step_two', JSON.stringify(form_step_two));
    var property_type_detail = JSON.parse(localStorage.getItem('form-step-1'));
    // console.log('property_details');
    // console.log(property_type_detail.property_type);
    var property_type = property_type_detail.property_type;
    // if(property_type_detail.property_type == 1){
    $(`#property-type-${property_type}`).show();
    // }
    $('#form-step-2').hide();
});


$('#previous_second').click(function () {
    $('#form-step-3').hide();
    $('#form-step-2').show();
});

$('#next_three').click(function () {
    var plotArea = $("#plotArea").val();
    var builtUpArea = $("#builtUpArea").val();
    var carpetArea = $("#carpetArea").val();
    var bedrooms = $("#bedrooms").val();
    var bathrooms = $("#bathrooms").val();
    var balconies = $("#balconies").val();
    var totalFloors = $("#totalFloors").val();
    var parking = $("#parking").val();
    var availability = $("#availability").val();
    var flooring = $("#flooring").val();

    var form_step_three = {
        'plotArea': plotArea,
        'builtUpArea': builtUpArea,
        'carpetArea': carpetArea,
        'bedrooms': bedrooms,
        'bathrooms': bathrooms,
        'balconies': balconies,
        'totalFloors': totalFloors,
        'parking': parking,
        'availability': availability,
        'flooring': flooring
    };
    localStorage.setItem('form_step_three', JSON.stringify(form_step_three));
    var property_type_detail = JSON.parse(localStorage.getItem('form-step-1'));
    var property_type = property_type_detail.property_type;
    $(`#property-type-${property_type}`).hide();
    $('#form-step-4').show();
});

$('#previous_three').click(function () {
    var property_type_detail = JSON.parse(localStorage.getItem('form-step-1'));
    var property_type = property_type_detail.property_type;
    $('#form-step-4').hide();
    $(`#property-type-${property_type}`).show();
});

$('#next_four').click(function () {
    var price = $("#price").val();
    var description = $("#description").val();
    var form_step_four = { 'price': price, 'description': description };
    localStorage.setItem('form_step_four', JSON.stringify(form_step_four));
    $('#form-step-4').hide();
    $('#form-step-5').show();
});

$('#previous_four').click(function () {
    $('#form-step-5').hide();
    $('#form-step-4').show();
});

$('#next_five').click(function () {
    var amenities = [];
    $('input[name="amenities"]:checked').each(function () {

        amenities.push(this.value);
        // console.log(this.value);
    });

    var furnishing = [];
    $('input[name="furnishing"]:checked').each(function () {

        furnishing.push(this.value);
        // console.log(this.value);
    });
    //  console.log(amenities);
    localStorage.setItem('amenities', JSON.stringify(amenities));
    localStorage.setItem('furnishing', JSON.stringify(furnishing));
    //console.log($('input[name="amenities"]:checked').serialize());
    $('#form-step-6').show();
    $('#form-step-5').hide();
});


$("#furnishing").change(function () {
    var checkFurnishing = $(this).val();
    if (checkFurnishing == "Furnished" || checkFurnishing == "Semifurnished") {
        $(".furnishing ").show();
    } else if (checkFurnishing == "Unfurnished") {
        $(".furnishing ").hide();
    } 
});


$('document').ready(() => {

    $.ajax({
        url: '/property_type',
        success: function (result) {
            var data = onlineMakaan.getLsData('form-step-1');
            if (data) {
                $('.property_type').find('option').remove();
                $.each(result, function (i, val) {
                    if (val.id == data.property_type) {
                        $('.property_type').append(`<option value="${val.id}" selected="selected">${val.name}</option>`);
                    } else {
                        $('.property_type').append(`<option value="${val.id}">${val.name}</option>`);
                    }
                });
            }
        }
    });

});

var onlineMakaan = {

    getLsData: ($key) => {
        var form_step_data = [];
        if (JSON.parse(localStorage.getItem($key))) {
            form_step_data = JSON.parse(localStorage.getItem($key));
            return form_step_data;
        }
    },


    processOnlineMakaanGetAjax: (url, datas) => {
        $.ajax({
            url: url,
            data: datas,
            dataType: 'json',
            type: 'GET',
            success: (result) => {
                console.log('result');
                console.log(result);
            }
        });
    },


}


$(function () {
    $("#uploader").plupload({
        runtimes: 'html5',
        url: "upload.php",
        max_file_size: '2mb',
        chunk_size: '1mb',
        multi_selection: true,
        resize: {
            width: 500,
            height: 500,
            quality: 90
        },
        filters: [
            { title: "Image files", extensions: "jpeg,jpg,png" }
        ],
        multipart: true,

        rename: true,

        sortable: true,

        dragdrop: true,

        views: {
            list: true,
            thumbs: true,
            active: 'thumbs'
        },
        init: {
            FileUploaded: function (up, file, info) {
                console.log(info);
                var obj = JSON.parse(info.response);
                $('#PhotoUploaded').append('<input type="hidden" name="file_name[]" id="file_name" value="' + obj.newfilename + '" />');
            }
        },
        flash_swf_url: '/plupload/js/Moxie.swf',
        silverlight_xap_url: '/plupload/js/Moxie.xap'
    });
});

