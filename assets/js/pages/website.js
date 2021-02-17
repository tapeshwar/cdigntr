$(document).ready(function(){
                            
    $('.expandEditor').attr('title','Click to show/hide item editor');
    $('.disclose').attr('title','Click to show/hide children');
    $('.deleteMenu').attr('title', 'Click to delete item.');

    $('.disclose').on('click', function() {
        $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
        $(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
    });
    
    $('.expandEditor, .itemTitle').click(function(){
        var id = $(this).attr('data-id');
        $('#menuEdit'+id).toggle();
        $(this).toggleClass('ui-icon-triangle-1-n').toggleClass('ui-icon-triangle-1-s');
    });
    
});	


$(document).ready(function(){
    var shor_trigger = '';
    $(".shortinput").each(function(i){        
        var connector = (i>0)?', #':'#';
        shor_trigger += connector+''+$(this).val();
    });
    var ns = $(shor_trigger).nestedSortable({
        forcePlaceholderSize: true,
        handle: 'div',
        helper:	'clone',
        items: 'li',
        opacity: .6,
        placeholder: 'placeholder',
        revert: 250,
        tabSize: 25,
        tolerance: 'pointer',
        toleranceElement: '> div',
        maxLevels: 5,
        isTree: true,
        expandOnHover: 700,
        startCollapsed: false
    });
        
    $('#toArray1_1').click(function(e){		
    $('#result').html('');
    list = $('#sortable1_1').nestedSortable('toArray', {startDepthCount: 0});
    //var list = JSON.stringify(list);
    $.ajax({
        type: "POST",
        url : "ajax.php",
        /*data: {'data':encodeURI(list)}*/
        data: {'data':list}
    }).done(function(data){
        $('#result_1').html(data);

        });
    });
        

});			


