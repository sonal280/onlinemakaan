
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