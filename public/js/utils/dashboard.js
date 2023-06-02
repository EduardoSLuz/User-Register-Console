$(".v-calleds-tab").on('click', function(e) {
    let tab = $(e.currentTarget);
    let el = tab.attr('data-target');
    
    $('.v-calleds').addClass('d-none');
    $(el).removeClass('d-none');
})