
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
    theme: 'bootstrap4'
    });
});
    
$('.property_type').change(function(){
    var propertytype = $('.property_type').val();
    //onlineMakaan.getLsData('form-step-1');
    $('.pre_property_listingtypes').find('option').remove();
    $.ajax({
        url: '/fetchListingProperty/'+propertytype,
        success:function(result){
            $.each(result, function(index, value){
                $('.pre_property_listingtypes').append(`<option value="${value.id}">${value.name}</option>`)
            });
        }
    });

});




$('#states').change(function(){
     var state_id = $(this).val();
     $('#cities').find('option').remove();
     $.ajax({
         url: '/fetchListingCities/'+state_id,
         success:function(result){
            //  console.log(result);
            //  return false;
             $.each(result, function(index, value){
                 $('#cities').append(`<option value="${value.id}">${value.district}</option>`)
             });
         }
     });
    });

$('#startpostbtn').click(function(){
    var property_type =  $('.property_type').val();
    var pre_property_listingtypes =  $('.pre_property_listingtypes').val();
    var form_step_1 = {'property_type' : property_type, 'pre_property_listingtypes' : pre_property_listingtypes};
    localStorage.setItem('form-step-1', JSON.stringify(form_step_1));
    
    $('#form-step-2').show();
    $('#form-step-1').hide();
});

$('#previous_first').click(function(){
    $('#form-step-2').hide();
    $('#form-step-1').show();
});

$('#next_two').click(function(){
    var states = $("#states").val();
    var cities = $("#cities").val();
    var locality = $("#locality").val();
    var street = $("#street").val();
    var colonyname = $("#colonyname").val();
    var hideaddress = $("#hideaddress").val();

    var form_step_two = {'states': states, 'cities': cities, 'locality': locality, 'street': street, 'colonyname': colonyname, 'hideaddress':hideaddress};
    localStorage.setItem('form_step_two', JSON.stringify(form_step_two));

    $('#form-step-3').show();
    $('#form-step-2').hide();
});


$('#previous_second').click(function(){
    $('#form-step-3').hide();
    $('#form-step-2').show();
});

$('#next_three').click(function(){
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

     $('#form-step-3').hide();
     $('#form-step-4').show();
});

$('document').ready(() =>{
    //alert('hj');
    onlineMakaan.getLsData('form-step-1');
    $.ajax({
        url: '/property_type',
        success:function(result){
            var data = onlineMakaan.getLsData('form-step-1');
            if(data){
                $('.property_type').find('option').remove();
                $.each(result, function(i, val){
                    if (val.id == data.property_type) {
                        $('.property_type').append(`<option value="${val.id}" selected="selected">${val.name}</option>`);
                    }else{
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
        if(JSON.parse(localStorage.getItem($key))){
            form_step_data = JSON.parse(localStorage.getItem($key));
            return form_step_data;
        }
    }
}

