$(document).ready(function () {

    $('#logform').on('submit', function (e) {
        e.preventDefault();

        let formdata = new FormData($(this)[0]);
        let url = base_url + 'login/user_login';
        let res = ajax(url, formdata);
        if (res.success) {
            swalThen(res.message, 'success', function () {
                window.location.href = `${base_url}dashboard`;
            });
        } else {
            swalThen(res.message, 'info');
        }
    });
});