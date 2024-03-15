$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token as a default header
    }
});


toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}


function sendAjaxRequest(url, requestData, successCallback, errorCallback) {
    $.ajax({
        url: url,
        type: 'POST', // or 'GET', 'PUT', etc. depending on your needs
        data: requestData,
        success: successCallback,
        error: errorCallback
    });
}
