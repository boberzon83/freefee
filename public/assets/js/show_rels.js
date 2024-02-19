$(function(){
    //alert ("Hola");
    $('#region_id').on('change',onSelectRegionChange);
    $('#provincia_id').on('change',onSelectProvinciaChange);
});

function onSelectRegionChange (){
    var region = $(this).val();

    if (!region)
    {
        $('#provincia_id').html('<option value="">-- Todas las Provincia --</option>');
    }
    else
    {
        //AJAX
        $.get('/api/region/'+region+'/provincias',function(data){
            var html_select = '<option value="">-- Todas las Provincia --</option>';
            for (var i=0 ; i<data.length ; ++i )
                html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
            $('#provincia_id').html(html_select);
        });
    }
}

function onSelectProvinciaChange (){
    var prov = $(this).val();
    if (!prov)
    {
        $('#municipio_id').html('<option value="">-- Todos los Municipios --</option>');
    }
    else
    {
        //AJAX
        $.get('/api/provincia/'+prov+'/municipios',function(data){
            var html_select = '<option value="">-- Todos los Municipios --</option>';
            for (var i=0 ; i<data.length ; ++i )
                html_select += '<option value="'+data[i].id_municipio+'">'+data[i].nombre+'</option>';
            $('#municipio_id').html(html_select);
        });
    }
}
