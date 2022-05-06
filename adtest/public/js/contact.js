$(document).on('change','#postal-code', '#email', function(){
    this.reportValidity();
});

$(document).on('change', '#email', function(){
    this.reportValidity();
});