var spinner = document.querySelector('.spinner-container');
var res = null


window.addEventListener("load", () => {
    setTimeout(function () {
        spinner.classList.replace('spinner-container', 'spinner-container-remove');
    }, 1000);
});
function sendAjaxFormData(param = {}, isReturn = true) {
    if (isReturn === false) {
        var return_response = null;
        $.ajax({
            url: param.url,
            type: 'post',
            data: param.data,
            async: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                return_response = response;
            }, error: function (e) {
                console.log(e);
            }
        });
        return return_response;
    } else {
        var return_data = null;
        $.ajax({
            url: param.url,
            type: 'post',
            data: param.data,
            async: false,
            dataType: 'json',
            success: function (response) {
                return_data = response;
            }, error: function (e) {
                console.log(e);
            }
        });

        if (isReturn) {
            return return_data;
        }
    }
}
function sendAjax(url, data = {}) {
    $.ajax({
        method: 'post',
        url: url,
        data: data,
        dataType: 'json',
        cache: false,
        async: false,
        success: function (response) {
            res = response
        },
        error: function (error) {
            res = error
        }
    })
    return res
}

function getAjax(url) {
    $.ajax({
        type: 'get',
        url: url,
        cache: false,
        async: false,
        dataType: 'json',
        success: function (response) {
            res = response
        },
        error: function (error) {
            res = error
        }
    })
    return res
}
function ajaxs(url, form) {
    var res = null;
    $.ajax({
        type: 'POST',
        url: url,
        data: form,
        async: false,
        processData: false,
        contentType: false,
        beforeSend: function () {
        },
        success: function (data) {
            res = (data);
        },
        error: function (xhr) {

        },
    });
    return res;
}

function ajax(url, form) {
    var res = null;
    $.ajax({
        type: 'POST',
        url: url,
        data: form,
        async: false,
        processData: false,
        contentType: false,
        beforeSend: function () {
        },
        success: function (data) {
            res = JSON.parse(data);
        },
        error: function (xhr) {

        },
    });
    return res;
}


function ajax1(url, form) {
    var res = null;
    $.ajax({
        type: 'POST',
        url: url,
        data: form,
        async: false,
        processData: false,
        contentType: false,
        beforeSend: function () {
        },
        success: function (data) {
            res = JSON.parse(data);
        },
        error: function (xhr) {

        },
    });
    return res;
}

function swalThen(title = '', icon = 'success', then = null) {
    Swal.fire({
        position: 'center',
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: 2000
    }).then(then);
}

function toast(title, icon = 'success', iconColor = 'green') {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: iconColor,
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
    })
    Toast.fire({
        icon: icon,
        title: title
    })
}

function toastSuccess(msg) {
    toastMixin.fire({
        title: msg
    });
}

function toastError(msg) {
    toastMixin.fire({
        title: msg,
        icon: 'error'
    });
}

function toastWarning(msg) {
    toastMixin.fire({
        title: msg,
        icon: 'warning'
    });
}


function newForm(url, data) {
    $.ajax({
        method: 'post',
        data: data,
        url: url,
        dataType: 'json',
        async: false,
        cache: false,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        success: function (response) {
            res = response
        },
        error: function (err) {
            res = err
        }
    })
    return res
}

var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});


