function alertMessage(msg_type, message_text) {
    var icon = 'fas fa-info-circle';
    if (msg_type == 'success') {
        icon = 'fas fa-check-circle';
    } else if (msg_type == 'danger') {
        icon = 'fas fa-exclamation-triangle';
    } else if (msg_type == 'info') {
        icon = 'fas fa-info-circle';
    } else if (msg_type == 'warning') {
        icon = 'fas fa-exclamation-circle';
    }

    $.notify({
        icon: icon,
        message: message_text

    }, {
        element: "body",
        position: '',
        type: msg_type,
        allow_dismiss: true,
        newest_on_top: false,
        placement: {
            from: "bottom",
            align: "right"
        },
        offset: {
            x: "5",
            y: "70"
        },
        spacing: 10,
        z_index: 1031,
        delay: 1000,
        timer: 100000,
        url_target: "_blank",
        mouse_over: null,
        animate: {
            enter: "animated fadeInDown",
            exit: "animated fadeOutUp"
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        icon_type: "class",
        template: '<div data-notify="container" class="col-xs-11 col-sm-6 col-md-3 alert alert-{0}" role="alert">'
            + '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">'
            + '<i class="fas fa-times" style="font-size: 0.75rem;"></i>'
            + '</button>'
            + '<span data-notify="icon"></span>&nbsp;&nbsp;<span data-notify="title">{1}</span><span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'

    });
}


