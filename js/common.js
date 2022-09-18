toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

document.addEventListener('FormSubmitted', function (event) {
    
    if (event.detail.appKey == '7d9cb00073cb66b7a4234d45a703') { //Password recovery 
        return false;
    }

    let postBackMessageEl = $(`#PostBackMessage${event.detail.UniqueSuffix}`);
    if(postBackMessageEl.length) {
        postBackMessageEl.hide();
        toastr["success"](postBackMessageEl.text());
        setTimeout(() => {
            if (event.detail.appKey == '7d9cb00090a4104babe247da9ce1') {
                location.href('/');
            } else {
                location.reload();
            }
        }, 2000)
    }
    
    
});

document.addEventListener('DataPageReady', function (event) {
    if (event.detail.appKey == '7d9cb000c8857b18d13b43aa8fb8') {
        let fullNameEl = $('#auth_user_full_name');
        if(fullNameEl.length) {
            $('#user_full_name_txt').text(fullNameEl.val());
            
        } 
    } 
});
