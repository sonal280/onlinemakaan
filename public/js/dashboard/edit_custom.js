// const { each } = require("lodash");

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
});

$('.property_type').change(function () {

    $('.select2-selection').removeClass('errorDiv');
    $('.property_type_span').removeClass('errorColor');
    $('#property_type_span').hide();
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




$('#edit_states').change(function () {
    $('.select2-selection').removeClass('errorDiv');
    $('#states_span').removeClass('errorColor');
    $('#states_span').hide();
    var state_id = $(this).val();
    $('#edit_cities').find('option').remove();
    $.ajax({
        url: '/fetchListingCities/' + state_id,
        success: function (result) {
            //  console.log(result);
            //  return false;
            $.each(result, function (index, value) {
                $('#edit_cities').append(`<option value="${value.id}">${value.district}</option>`)
            });
        }
    });
});

$('#editstartpostbtn').click(function () {
    var property_type = $('.edit_property_type').val();
    if (property_type == 0) {
        $('#property_type_span').show();
        $('.select2-selection').addClass('errorDiv');
        $('#property_type_span').addClass('errorColor');
        // $('.property_type').addClass("errorDiv");
        return false;
    } else {
        $('.select2-selection').removeClass('errorDiv');
        $('.property_type_span').removeClass('errorColor');
        $('#property_type_span').hide();
        var pre_property_listingtypes = $('.edit_pre_property_listingtypes').val();
        var form_step_1 = { 'property_type': property_type, 'pre_property_listingtypes': pre_property_listingtypes };
        localStorage.setItem('form-step-1', JSON.stringify(form_step_1));
        $('#edit-form-step-2').show();
        $('#edit-form-step-1').hide();
    }

});

$('#edit_previous_first').click(function () {
    $('#edit-form-step-2').hide();
    $('#edit-form-step-1').show();
});

$('#edit_next_two').click(function () {
    //alert('ghgj');
    // $('#edit-property-type-1').show();
    var states = $("#edit_states").val();
    var cities = $("#edit_cities").val();
    var locality = $("#edit_locality").val();
    var street = $("#edit_street").val();
    var colonyname = $("#edit_colonyname").val();
    var hideaddress = $("#edit_hideaddress").val();

    console.log(states);
    if (states == 0) {
        $('.select2-selection').addClass('errorDiv');
        $('#states_span').addClass('errorColor');
        $('#states_span').show();
        return false;
    } else {
        $('.select2-selection').removeClass('errorDiv');
        $('#states_span').removeClass('errorColor');
        $('#states_span').hide();
    }

    if (locality == '') {
        onlineMakaan.setError('locality');
        return false;
    } else {
        onlineMakaan.removeError('locality');
    }

    if (street == '') {
        onlineMakaan.setError('street');
        return false;
    } else {
        onlineMakaan.removeError('street');
    }

    if (colonyname == '') {
        onlineMakaan.setError('colonyname');
        return false;
    } else {
        onlineMakaan.removeError('colonyname');
    }

    var form_step_two = { 'states': states, 'cities': cities, 'locality': locality, 'street': street, 'colonyname': colonyname, 'hideaddress': hideaddress };
    localStorage.setItem('form_step_two', JSON.stringify(form_step_two));
    var property_type_detail = JSON.parse(localStorage.getItem('form-step-1'));
    var property_type = property_type_detail.property_type;

    if (property_type) {
        $(`#edit-property-type-${property_type}`).show();
        $('#edit-form-step-2').hide();
    }else{
        $('#edit-property-type-1').show();
        $('#edit-form-step-2').hide();
    }
});


$('#edit_previous_house').click(function () {
    $('#edit_property-type-1').hide();
    $('#edit-form-step-2').show();
});

$('#edit_previous_flat').click(function () {
    $('#edit-property-type-2').hide();
    $('#edit-form-step-2').show();
});


$('#edit_previous_plot').click(function () {
    $('#edit-property-type-3').hide();
    $('#edit-form-step-2').show();
});
$('#edit_next_plot').click(function () {
    var plotArea = $("#plotareaa").val();
    var floorallowed = $("#floorallowed").val();
    var possession = $("#possession").val();
    var boundary = $(".radio").val();
    console.log('possession');
    console.log(possession);
    if (plotArea == '') {
        onlineMakaan.setError('plotareaa');
        return false;
    } else {
        onlineMakaan.removeError('plotareaa');
    }

    if (possession == '') {
        onlineMakaan.setError('possession');
        return false;
    } else {
        onlineMakaan.removeError('possession');
    }


    var form_step_three = {
        'plotArea': plotArea,
        'floorallowed': floorallowed,
        'possession': possession,
        'boundary': boundary,
    };
    localStorage.setItem('form_step_three', JSON.stringify(form_step_three));
    var property_type_detail = JSON.parse(localStorage.getItem('form-step-1'));
    var property_type = property_type_detail.property_type;
    $(`#edit-property-type-${property_type}`).hide();
    $('#edit-form-step-4').show();
});
$('#edit_next_house').click(function () {
    var plotArea = $("#plotArea").val();
    var builtUpArea = $("#builtUpArea").val();
    var bedrooms = $("#bedrooms").val();
    var bathrooms = $("#bathrooms").val();
    var balconies = $("#balconies").val();
    var totalFloors = $("#totalFloors").val();
    var parking = $("#parking").val();
    var availability = $("#availability").val();
    var flooring = $("#flooring").val();

    if (plotArea == '') {
        onlineMakaan.setError('plotArea');
        return false;
    } else {
        onlineMakaan.removeError('plotArea');
    }

    if (builtUpArea == '') {
        onlineMakaan.setError('builtUpArea');
        return false;
    } else {
        onlineMakaan.removeError('builtUpArea');
    }
    var form_step_three = {
        'plotArea': plotArea,
        'builtUpArea': builtUpArea,
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
    if (property_type) {
        $(`#edit-property-type-${property_type}`).hide();
        $('#edit-form-step-4').show();
    }else{
        $('#edit-property-type-1').hide();
        $('#edit-form-step-4').show();
    } 

});

$('#next_flat').click(function () {
    var superBuiltupArea = $("#superBuiltupArea").val();
    var builtUpArea = $("#builtUpAreaflat").val();
    var carpetArea = $("#carpetArea").val();
    var bedrooms = $("#bedrooms").val();
    var bathrooms = $("#bathrooms").val();
    var balconies = $("#balconies").val();
    var totalFloors = $("#totalFloors").val();
    var propertyOnFloor = $("#propertyOnFloor").val();
    var parking = $("#parking").val();
    var availability = $("#availability").val();
    var flooring = $("#flooring").val();

    if (superBuiltupArea == '') {
        onlineMakaan.setError('superBuiltupArea');
        return false;
    } else {
        onlineMakaan.removeError('superBuiltupArea');
    }
    if (builtUpArea == '') {
        onlineMakaan.setError('builtUpAreaflat');
        return false;
    } else {
        onlineMakaan.removeError('builtUpAreaflat');
    }
    if (carpetArea == '') {
        onlineMakaan.setError('carpetArea');
        return false;
    } else {
        onlineMakaan.removeError('carpetArea');
    }

    var form_step_three = {
        'superBuiltupArea': superBuiltupArea,
        'builtUpArea': builtUpArea,
        'carpetArea': carpetArea,
        'bedrooms': bedrooms,
        'bathrooms': bathrooms,
        'balconies': balconies,
        'totalFloors': totalFloors,
        'propertyOnFloor': propertyOnFloor,
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


$('#edit_previous_three').click(function () {
    var property_type_detail = JSON.parse(localStorage.getItem('form-step-1'));
    var property_type = property_type_detail.property_type;
    $('#edit-form-step-4').hide();
    $(`#edit-property-type-${property_type}`).show();
});

$('#edit_next_four').click(function () {
    var price = $("#edit-price").val();
    var description = $("#edit-description").val();
    if (price == '') {
        onlineMakaan.setError('price');
        return false;
    } else {
        onlineMakaan.removeError('price');
    }
    if (description == '') {
        onlineMakaan.setError('description');
        return false;
    } else {
        onlineMakaan.removeError('description');
    }
    var form_step_four = { 'price': price, 'description': description };
    localStorage.setItem('form_step_four', JSON.stringify(form_step_four));
    $('#edit-form-step-4').hide();
    $('#edit-form-step-5').show();
});

$('#edit_previous_four').click(function () {
    $('#edit-form-step-5').hide();
    $('#edit-form-step-4').show();
});

$('#edit_next_five').click(function () {
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
    $('#edit-form-step-6').show();
    $('#edit-form-step-5').hide();
});

$("#edit_previous_last_step").click(function () {
    $('#edit-form-step-6').hide();
    $('#edit-form-step-5').show();
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
                // if (data) {
                    var pt = $('.edit_property_type').val();
                    $('.edit_property_type').find('option').remove();
                    if (pt) {
                        $.each(result, function (i, val) {
                            if (val.id == pt) {
                                $('.edit_property_type').append(`<option value="${val.id}" selected="selected">${val.name}</option>`);
                            } else {
                                $('.edit_property_type').append(`<option value="${val.id}">${val.name}</option>`);
                            }
                        });
                    }else{
                        $.each(result, function (i, val) {
                            if (val.id == data.property_type) {
                                $('.edit_property_type').append(`<option value="${val.id}" selected="selected">${val.name}</option>`);
                            } else {
                                $('.edit_property_type').append(`<option value="${val.id}">${val.name}</option>`);
                            }
                        });
                    }
                    
                // }
            }
        });
    
    var step1 = onlineMakaan.getLsData('form-step-1');
    var pt = $('.edit_property_type').val();
    if (pt){
        var property_type = $('.edit_property_type').val();
    }else{
        var property_type = step1.property_type;
    }

    $.ajax({
        url: '/fetchListingProperty/' + property_type,
        success: function (result) {
            console.log(result);
            // console.log(step1.pre_property_listingtypes);
            // if (step1) {
                $('.edit_pre_property_listingtypes').find('option').remove();
                var listing_property_id = $('#edit_listing_property_id').val();
                if (listing_property_id) {
                    
                    $.each(result, function (i, val) {
                        if (val.id == listing_property_id) {
                            $('.edit_pre_property_listingtypes').append(`<option value="${val.id}" selected="selected">${val.name}</option>`);
                        } else {
                            $('.edit_pre_property_listingtypes').append(`<option value="${val.id}">${val.name}</option>`);
                        }
                    });
                }else{
               
                    $.each(result, function (i, val) {
                        if (val.id == step1.pre_property_listingtypes) {
                            $('.edit_pre_property_listingtypes').append(`<option value="${val.id}" selected="selected">${val.name}</option>`);
                        } else {
                            $('.edit_pre_property_listingtypes').append(`<option value="${val.id}">${val.name}</option>`);
                        }
                    });
                }
            // }
        }
    });


    $.ajax({
        url: '/states',
        success: function (result) {
            var data = onlineMakaan.getLsData('form_step_two');
            var editState = $('#edit_states').val();

            if (editState) {
                $('#edit_states').find('option').remove();
                $.each(result, function (i, val) {
                    // console.log(val);
                    if (val.id == editState) {
                        // console.log(val);return false;
                        $('#edit_states').append(`<option value="${val.id}" selected="selected">${val.state}</option>`);
                    }
                    else{
                        $('#edit_states').append(`<option value="${val.id}">${val.state}</option>`);
                    }
                });
            }else{
                $.each(result, function (i, val) {
                    // console.log(val);
                    if (val.id == data.states) {
                        // console.log(val);return false;
                        $('#edit_states').append(`<option value="${val.id}" selected="selected">${val.state}</option>`);
                    }
                    else {
                        $('#edit_states').append(`<option value="${val.id}">${val.state}</option>`);
                    }
                });
            }
        }
    });
    
    var step2 = onlineMakaan.getLsData('form_step_two');
    var editState = $('#edit_states').val();
    if (editState) {
        var state = editState;
    }else{
        var state = step2.states;
    }
    var editCity = $('#edit_city').val();
    // console.log(step2);
    // return false;
    $.ajax({
        url: '/fetchListingCities/' + state,
        success: function (result) {
            // console.log(step2);
            // return false;
            $('#cities').find('option').remove();
            if (editCity) {
                // alert('vvjvj');
                $.each(result, function (i, val) {
                    console.log(val);
                    if (val.id == editCity) {
                        $('#edit_cities').append(`<option value="${val.id}" selected="selected">${val.district}</option>`);
                    } else {
                        $('#edit_cities').append(`<option value="${val.id}">${val.district}</option>`);
                    }
                });
            }else{
                $.each(result, function (i, val) {
                    console.log(val);
                    if (val.id == step2.cities) {
                        $('#edit_cities').append(`<option value="${val.id}" selected="selected">${val.district}</option>`);
                    } else {
                        $('#edit_cities').append(`<option value="${val.id}">${val.district}</option>`);
                    }
                });
            }
        }
    });

   

   


    var step2 = onlineMakaan.getLsData('form_step_two');
    // console.log(step2.locality);
    $('#locality').val(step2.locality);
    $('#street').val(step2.street);
    $('#colonyname').val(step2.colonyname);

    var step3 = onlineMakaan.getLsData('form_step_three');
    $('#plotArea').val(step3.plotArea);
    $('#builtUpArea').val(step3.builtUpArea);
    $('#bedrooms').val(step3.bedrooms).find(`option[value= ${step3.bedrooms} ]`).attr('selected', true);
    $('#bathrooms').val(step3.bathrooms).find(`option[value= ${step3.bathrooms} ]`).attr('selected', true);
    $('#balconies').val(step3.balconies).find(`option[value= ${step3.balconies} ]`).attr('selected', true);
    $('#totalFloors').val(step3.totalFloors).find(`option[value= ${step3.totalFloors} ]`).attr('selected', true);
    $('#parking').val(step3.parking).find(`option[value= ${step3.parking} ]`).attr('selected', true);
    $('#availability').val(step3.availability).find(`option[value= ${step3.availability} ]`).attr('selected', true);
    $('#flooring').val(step3.flooring).find(`option[value= ${step3.flooring} ]`).attr('selected', true);
    //$('#bedrooms').find(`<option value="${step3.bedrooms}">${step3.bedrooms}</option>`).attr('selected', 'selected');
    var step4 = onlineMakaan.getLsData('form_step_four');
    $('#price').val(step4.price);
    $('#description').val(step4.description);

    var amenities =  onlineMakaan.getLsData('amenities');
    
    var amentiesId = ['WaterStorage', 'VisitorParking', 'Park', 'FengShui', 'WasteDisposal', 'PrivateGarden', 'WaterHarvesting', 'MaintenanceStaff', 'Security', 'AirConditioned', 'Pipedgas', 'wifi', 'Waterpurifie', 'SwimmingPool', 'GYM', 'Clubhouse', 'SecurityPersonnel', 'BankAttached', 'Municipalcorporation', 'Borewell', 'Garden', 'MainRoad', 'Club', 'Pool', 'Others', 'gatedsociety', 'CornerProperty', 'PetFriendly', 'WheelchairFriendly'];

    $.each(amentiesId, function (i, id) {
        $.each(amenities, function (i, val) {
            if($("#" + id).val() == val){
                $("#" + id).prop('checked', true);
            }
        });
    });

    var furnishing = onlineMakaan.getLsData('furnishing');
    // console.log(furnishing);
    var furnishingId = ['Wardrobs', 'Fans', 'Beds', 'Lights', 'ModulerKitchen', 'Fridge', 'AC', 'Geyser', 'TV', 'Stove', 'WashingMachine', 'WaterPurifire', 'Microwave', 'Curtains', 'Chimney', 'Exhaustfan', 'Sofa', 'DinningTable'];

    $.each(furnishingId, function (i, id) {
        $.each(furnishing, function (i, val) {
            if ($("#" + id).val() == val) {
                $("#" + id).prop('checked', true);
            }
        });
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


    setError: (key) => {
        $(`#${key}_span`).show();
        $(`#${key}`).addClass('errorDiv');
        $(`#${key}_span`).addClass('errorColor');
        return false;
    },


    removeError: (key) => {
        $(`#${key}_span`).hide();
        $(`#${key}`).removeClass('errorDiv');
        $(`#${key}_span`).removeClass('errorColor');
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

$('#add_more_images').click(function () {
    $('#photouploader').show();
    $(this).hide();
})

function remove(ele, image_id) {
    if (confirm('Do you really want to remove this')) {
        // var token = "{{ csrf_token() }}";
        $.ajax({
            url: '/property_image/delete/' + image_id,
            method: 'get',
            success: function (result) {
                $(`#pro_image_${result}`).hide();
            }
        });   
    }
}


var uploaded_images = $(`#uploaded_images`).html();
if (uploaded_images) {
    $(`#uploaded_images`).css('display', 'none');
}


$(function () {
    $("#uploader").plupload({
        // General settings
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        runtimes: 'html5,flash,silverlight,html4',
        url: "/upload_images",

        // Maximum file size
        max_file_size: '2000mb',

        chunk_size: '1mb',

        // Resize images on clientside if we can
        resize: {
            width: 800,
            height: 800,
            quality: 90,
            crop: false // crop to exact dimensions
        },

        // Specify what files to browse for
        filters: [
            { title: "Image files", extensions: "jpg,gif,png" },
            { title: "Zip files", extensions: "zip,avi" }
        ],

        // Rename files by clicking on their titles
        rename: true,

        // Sort files
        sortable: true,

        // Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
        dragdrop: true,

        // Views to activate
        views: {
            list: true,
            thumbs: true, // Show thumbs
            active: 'thumbs'
        },

        init: {
            FileUploaded: function (up, file, info) {
                console.log(info);
                var obj = JSON.parse(info.response);
                $('#PhotoUploaded').append('<input type="hidden" name="file_name[]" id="file_name" value="' + obj.newfilename + '" />');
            }
        },


        // Flash settings
        flash_swf_url: '/plupload/js/Moxie.swf',

        // Silverlight settings
        silverlight_xap_url: '/plupload/js/Moxie.xap'
    });
});


$('#propertyForm').submit(function (e) {
    e.preventDefault();
    var formData = new FormData($('#propertyForm')[0]);
    var form_step_one = onlineMakaan.getLsData('form-step-1');
    var form_step_two = onlineMakaan.getLsData('form_step_two');
    var form_step_three = onlineMakaan.getLsData('form_step_three');
    var form_step_four = onlineMakaan.getLsData('form_step_four');
    var amenities = onlineMakaan.getLsData('amenities');
    var furnishing = onlineMakaan.getLsData('furnishing');
    formData.append('form_step_one', JSON.stringify(form_step_one));
    formData.append('form_step_two', JSON.stringify(form_step_two));
    formData.append('form_step_three', JSON.stringify(form_step_three));
    formData.append('form_step_four', JSON.stringify(form_step_four));
    formData.append('amenities', JSON.stringify(amenities));
    formData.append('furnishing', JSON.stringify(furnishing));

    $('.upload_property').prop('disabled', true);
    $('#divMsg').show();
    $('#divMsg').css({
        'position': 'absolute',
        'top': '0px',
        'left':'200px',
    });

    $('#divMsg img').css({
        'height' : '250px',
        'width': '250px'
    });

    $.ajax({
        'url': '/store-property',
        'headers': {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        'method': 'POST',
        'data': formData,
        'contentType': false,
        'processData': false,
        'cache': false,
        success: function (data) {
            localStorage.clear();
            $('#divMsg').hide();
            swal(
                'Good job!',
                'You clicked the button!',
                'success'
            );
            
            $(".swal-button--confirm").click(function () {
                window.location.href = '/dashboard';
            });
        },
    });
});

